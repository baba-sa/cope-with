<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'user_profiles';
    
    protected $fillable = [
        'user_id',
        'icon_path',
        'profile_comment',
    ];
    
    use HasFactory;
    
    public function user(){
        return this->belongsTo(User::class);
    }
}
