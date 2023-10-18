<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coping extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'action',
        'user_id',
        'is_public',
        'genre_id',
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function practices()
    {
        return $this->hasMany(Practice::class);
    }
    
    public function users()
    {
        return $this->belongsToMany(User::class, 'my_actions', 'coping_id', 'user_id');
    }
}
