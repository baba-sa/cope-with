<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyActionsController extends Controller
{
    //
    public function store($coping_id){
        
        // 
        \Auth::user()->myActions()->attach($coping_id);
        // 前のURLへリダイレクトさせる
        return back();
    }
    
    public function destroy($coping_id){
        
        // 
        \Auth::user()->myActions()->detach($coping_id);
        // 前のURLへリダイレクトさせる
        return back();
    }
}
