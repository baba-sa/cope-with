<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coping;
use App\Models\Practice;
use App\Models\User;

class StatsController extends Controller
{
    //
    public function show(Request $request){
        
        $user = \Auth::user();
        
        if(!isset($request->coping_id)){
            $practices = $user->practices();
            
        }else{
            $practices = Practice::where([
                ['user_id', '=', $user->id],
                ['coping_id', '=', $request->coping_id],
            ]);
        }
        
        $practices_for_loop = $practices->toBase()->get();
        
        $count_practices = $practices->count();
        
        $average_diff_moods = $this->getAverageDiffMoods($practices_for_loop);

        $copings = $this->getCopings($user->id);
        
        return view('stats.stats', [
            'copings' => $copings,
            'practices' => $practices->orderBy('id', 'desc')->simplePaginate(20), 
            'count_practices' => $count_practices,
            'average_diff_moods' => $average_diff_moods,
            ]);
        
    }
    
    private function getCopings($id){
        
        $user = User::findOrFail($id);
        $practices = $user->practices()->toBase()->get();
        $coping_ids = [];
        
        foreach($practices as $practice){
            $coping_id = $practice->coping_id;
            array_push($coping_ids, $coping_id);
        }
        
        $copings = Coping::whereIn('id', $coping_ids)->get();
        
        return $copings;
    }
    
    private function getAverageDiffMoods($practices){
        
        $count_practices = $practices->count();
        
        $sum_diff_moods = 0;
        foreach($practices as $practice){
            $sum_diff_moods = $sum_diff_moods + (int)$practice->diff_moods;
        }
        
        $average_diff_moods = (double)($sum_diff_moods / $count_practices);
        
        return $average_diff_moods;
    }
}
