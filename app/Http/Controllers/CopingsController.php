<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Coping;

class CopingsController extends Controller
{
    //
    public function index(){
        
        $copings = Coping::orderBy('craeted_at', 'desc')->pagenate(10);
        
        return view ('dashboard', [
            'copings' => $copings,
        ]);
        
    }
    
    public function store(Request $request){
        
        $coping = new Coping([
            'user_id' => \Auth::id(),
            'action' => $request->action,
        ]);
        
        $coping->save();
        
        return back();
        
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
