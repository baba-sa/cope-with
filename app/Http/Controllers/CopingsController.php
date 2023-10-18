<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Coping;
use App\Models\Genre;
use App\Models\User;

class CopingsController extends Controller
{
    //
    public function index(){

        $copings = Coping::where('is_public','1')->orderBy('id', 'desc')->get();
        
        $genres = Genre::all();

        return view ('copings.index', [
            'copings' => $copings,
            'genres' => $genres,
        ]);
        
    }
    
    public function create(){
        
        $genres = Genre::all();
        
        if(\Auth::check()){
            return view('copings.create', [ 'genres' => $genres, ]);
            
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
            'genre_id' => $request->genre_id,
        ]);
        
        $coping->save();
        
        $coping->users()->attach($user_id);
        
        //return redirect('dashboard');
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
