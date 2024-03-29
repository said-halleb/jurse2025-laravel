<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    protected $fillable = ['href'];

    // Relation avec la table 'pages'
    public function pages()
    {
        return $this->hasMany(Page::class);
    }
}