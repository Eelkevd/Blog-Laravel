<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

// Model page for the events
class Event extends Model
{
    protected $fillable = ['title','start_date','end_date'];
}