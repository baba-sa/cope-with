<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatsController extends Controller
{
    //
    public function show(String $kikan, $id){
        
        return view('stat.stat', [
            'today' => $todays_num, 
            'practices' => $practices, 
            ]);
        
    }
}
