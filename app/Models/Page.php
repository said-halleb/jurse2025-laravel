<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = ['name'];

    // Relation avec la table 'links'
    public function link()
    {
        return $this->belongsTo(Link::class);
    }
}