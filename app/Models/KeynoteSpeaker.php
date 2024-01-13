<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KeynoteSpeaker extends Model
{
    protected $fillable = ['firstname', 'lastname', 'description', 'website'];
}