<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Genre;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $genre_strs = ['スポーツ', 'メディア', 'インターネット', '会話・交際',
                    '行楽・散策', '趣味・娯楽・教養', '休息', 'その他', 
                    ];
        
        foreach($genre_strs as $str){
            $genre = new Genre(['genre'=>$str,]);
            $genre->save();
        }
    }
}
