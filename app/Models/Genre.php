<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $table = 'action_genres';
    use HasFactory;
    
    public function copings(){
        return this->hasMany(Coping::class);
    }
}
