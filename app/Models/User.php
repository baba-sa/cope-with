<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    public function profile()
    {
        return $this->hasOne(Profile::class);
    }
    
    public function copings()
    {
        return $this->hasMany(Coping::class);
    }
    
    public function practices()
    {
        return $this->hasMany(Practice::class);
    }
    
    public function myActions(){
        return $this->belongsToMany(Coping::class, 'my_actions', 'user_id', 'coping_id');
    }
    
    public function isMyAction($coping_id){
        return $this->myActions()->where('coping_id', $coping_id)->exists();
    }
    
    /**
     * このユーザに関係するモデルの件数をロードする。
     */
    public function loadRelationshipCounts()
    {
        $this->loadCount('copings');
        $this->loadCount('practices');
        $this->loadCount('my_actions');
    }
}
