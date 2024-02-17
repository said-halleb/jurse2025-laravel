<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KeynoteSpeaker extends Model
{
    protected $fillable = ['firstname', 'lastname', 'description', 'website'];
}