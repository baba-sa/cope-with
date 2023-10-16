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
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function copings()
    {
        return $this->belongsTo(Coping::class);
    }
}
