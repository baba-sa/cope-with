<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Mood;

class MoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $mood_strs = ['☆1','☆2','☆3','☆4','☆5',];
        foreach($mood_strs as $str){
            $mood = new Mood([
                'name_of_mood' => $str, 
            ]);
            
            $mood->save();
        }
    }
}
