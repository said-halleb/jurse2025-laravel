<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SpecialSession extends Model
{
    protected $fillable = ['title', 'description', 'order'];
}