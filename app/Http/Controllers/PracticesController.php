<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Practice;
use App\Models\Coping;
use App\Models\User;

class PracticesController extends Controller
{
    //
    public function index(){
        
        $practices = Practice::all();
        $copings = Coping::all();
        $mycopes = \Auth::user()->myActions()->get();
        
        return view('dashboard', [
            'practices'=>$practices, 
            'copings' => $copings, 
            'mycopes' => $mycopes,
            ]);
    }
    
    
    public function store(Request $request){
        
        $practice = new Practice();
        
        $practice->comment = $request->comment;
        $practice->user_id = \Auth::user()->id;
        $practice->coping_id = $request->coping_id;
        
        $practice->save();
        
        return back();
        
    }
    
    
    
    public function destroy($id){
        
        $practice = Practice::findOrFail($Id);
        
        $practice->delete();
        
        return redirect('/');
    }
    
}
