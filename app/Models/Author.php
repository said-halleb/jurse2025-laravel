<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = ['firstname', 'lastname', 'organism'];

    // Relation avec la table 'countries'
    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    // Relation avec la table 'specialsessions'
    public function specialSession()
    {
        return $this->belongsTo(SpecialSession::class);
    }
}