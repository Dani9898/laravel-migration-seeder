<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $fillable = [

        'name',
        'surname',
        'date_of_birth',
        'biografia',
        'year_of_debut',
        'album_of_debut',
        'vocal_style'
    ];
}
