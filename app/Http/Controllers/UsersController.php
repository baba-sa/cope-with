<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Coping;
use App\Models\Practice;

class UsersController extends Controller
{
    //
    public function show($id){
        
        $user = User::findOrFail($id);
        
        $copings = $user->copings()->get();
        $practices = $user->practices()->get();
        
        return view('users.show', [
            'user' => $user,
            'copings' => $copings,
            'practices' => $practices,
            ]);
        
    }
}
