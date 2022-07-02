<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Cviebrock\EloquentSluggable\Sluggable;
use  App\Models\roles;
class User extends Authenticatable
{
    use HasFactory;
    use Sluggable;

    protected $guarded = [];
    

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'password',
        'mobile',
    ];

   
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
    
    public function role(){
        return $this->belongsToMany('App\Models\roles' , 'role_users', 'user_id', 'role_id');
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'email'
            ] 
        ];
    }
}
