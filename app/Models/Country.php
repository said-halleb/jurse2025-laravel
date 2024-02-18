<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = ['name'];

    // Relation avec la table 'authors'
    public function authors()
    {
        return $this->hasMany(Author::class);
    }
}