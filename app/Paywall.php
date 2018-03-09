<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

// Model page for the paywall
class Paywall extends Model
{
    protected $dates = ['mandaatdatum'];
    
    // Couple paywall with user
    public function user()
    {
       return $this->belongsTo(User::class);
    }
}
