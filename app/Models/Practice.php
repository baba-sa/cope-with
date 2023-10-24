<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Practice extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'user_id',
        'coping_id',
        'comment',
        'mood_id_before',
        'mood_id_after',
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function coping()
    {
        return $this->belongsTo(Coping::class);
    }
}
