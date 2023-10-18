<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Coping;

class CopingsController extends Controller
{
    //
    public function index(){
        
        $copings = Coping->where('is_public','1')->get();
        
        return view ('dashboard', [
            'copings' => $copings,
        ]);
        
    }
    
    public function create(){
        
        if(\Auth::check()){
            return view('copings.create');
            
        }else{
            return view('auth.login');
            
        }
    }
    
    public function store(Request $request){
        
        $user_id = \Auth::id();
        
        $coping = new Coping([
            'user_id' => $user_id,
            'action' => $request->action,
            'is_public' => isset($request->is_public),
        ]);
        
        $coping->save();
        
        $coping->users()->attach($user_id);
        
        return redirect('dashboard');
        
    }
    
    public function show($id){
        
        $coping = Coping::findOrFail($id);
        
        $practices = $coping->practices()->get();
        
        return view('copings.show', [
            'coping' => $coping,
            'practices' => $practices,
        ] );
        
    }
    
    
    
}
