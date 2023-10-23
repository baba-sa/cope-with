<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Coping;
use App\Models\Genre;
use App\Models\User;

class CopingsController extends Controller
{
    //
    public function index(Request $request){

        if(empty($request)){
            $copings = Coping::where('is_public','1')->orderBy('id', 'desc')->get();
            
        }else{
            $created_by = $request->created_by;
            $genre_id = $request->genre_id;
            $user_id = \Auth::user()->id;
            
            
            $query = Coping::query();
            
            if($request->order){
                $query->orderBy('copings.created_at', 'asc');
            }else{
                $query->orderBy('copings.created_at', 'desc');
            }
            
            if($created_by){
                $query->where('copings.user_id', '=', $user_id);
            }else{
                $query->where('copings.is_public','1');
            }
            
            if(!empty($genre_id)){
                $query->where('copings.genre_id', '=', $genre_id);
            }
            
            if($request->only_my_actions){
                $query->join('my_actions', 'coping_id', '=', 'copings.id')
                    ->where('my_actions.user_id', '=', $user_id);
                    
                $my_actions=$query->orderBy('copings.id', 'desc')->get();
                $copings = [];
                foreach($my_actions as $action){
                    $coping = Coping::find($action->coping_id);
                    array_push($copings, $coping);
                }
                return view ('copings.index', [
                    'copings' => $copings,
                    ]);
            }
            $copings = $query->get();
                
        }
        
        return view ('copings.index', [
            'copings' => $copings,
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
