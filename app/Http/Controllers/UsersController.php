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
        
        $copings = $user->myActions()->get();
        $practices = $user->practices()->orderBy('id', 'desc')->simplePaginate(20);
        
        return view('users.show', [
            'user' => $user,
            'copings' => $copings,
            'practices' => $practices,
            ]);
        
    }
}
