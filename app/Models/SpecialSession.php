<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SpecialSession extends Model
{
    protected $fillable = ['title', 'description', 'order'];
}