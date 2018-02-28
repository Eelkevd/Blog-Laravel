<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paywall extends Model
{
    protected $dates = ['mandaatdatum'];

    public function user()
    {
      return $this->belongsTo(User::class);
    }



}
