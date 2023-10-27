<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

use App\Models\User;
use App\Models\Profile;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }
    
    public function update(Request $request)
    {
         $this->validate($request, [
            'user_icon' => [
                'file',
                'mimes:jpeg,jpg,png'
            ]
        ]);
        
        $id = $request->user()->profile->id;
        
        $profile = Profile::findOrFail($id);
        $path = '';
        if(isset($profile->icon_path)){
            $path = $profile->icon_path;
            
        }
        if ($request->hasFile('user_icon')) {
            $path = $request->file('user_icon')->store('profile-icons', 'public');
        }
        
        $profile->icon_path = $path;
        $profile->profile_comment = $request->user_bio;
            
        if($profile->save()){
            return redirect('users/'.$id);
        }
        
    }
}
