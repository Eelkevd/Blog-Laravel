<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

// Model page for the users
class User extends Authenticatable
{
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    // Couple blogs with user
    public function blogs() 
    {
      return $this->hasMany(Blog::class);
    }
    
    // Couple paywall with user
    public function paywalls()
    {
      return $this->belongsTo(Paywall::class);
    }
}
