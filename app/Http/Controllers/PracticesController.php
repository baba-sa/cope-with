<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Practice;
use App\Models\Coping;
use App\Models\User;
use App\Models\Genre;

class PracticesController extends Controller
{
    //
    public function index(){
        
        $copings = Coping::where('is_public','1')->orderBy('id', 'desc')->get();
        $copeids = $copings->pluck('id')->toArray();
        $practices = Practice::whereIn('coping_id', $copeids)->orderBy('id', 'desc')->simplePaginate(20);
        $mycopes = [];
        if(\Auth::check()){
            $mycopes = \Auth::user()->myActions()->get();
        }
        
        return view('dashboard', [
            'practices'=>$practices, 
            'copings' => $copings, 
            'mycopes' => $mycopes,
            ]);
    }
    
    
    public function store(Request $request){
        
        $this->validate($request, [
            'coping_id' => ['required', ],
            'comment' => ['required', 'max:200', ],
        ]);
        
        $practice = new Practice();
        
        $practice->comment = $request->comment;
        $practice->user_id = \Auth::user()->id;
        $practice->coping_id = $request->coping_id;
        $practice->mood_id_before = $request->mood_id_before;
        $practice->mood_id_after = $request->mood_id_after;
        $practice->diff_moods = (int)$request->mood_id_after - (int)$request->mood_id_before;
        
        $practice->save();
        
        return back();
        
    }
    
    
    
    public function destroy($id){
        
        $practice = Practice::findOrFail($Id);
        
        $practice->delete();
        
        return redirect('/');
    }
}
