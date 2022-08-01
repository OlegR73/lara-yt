<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    //The attributes that are mass assignable.
 
    // protected $fillable = [
    //     'name',
    //     'email',
    //     'password',
    // ];

     // the same as fillable
     protected $guarded = [];

    //The attributes that should be hidden for serialization.
    
    protected $hidden = [
        'password',
        //'remember_token',
    ];

    // The attributes that should be cast.
    
    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];

    public function information(): HasOne
    {
        return $this->hasOne(UserInformation::class);
    }

    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comments::class,'author_id','id');
    }
}
