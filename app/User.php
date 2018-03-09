<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

// Model page for the users
class User extends Authenticatable
{
    use Notifiable;
    protected $fillable = [
        'name', 'email', 'password',
    ];
 
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
