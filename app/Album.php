<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = [

        'title',
        'date_of_pubblication',
        'sales',
        'numer_of_tracks',
        'total_duration',
        'vocal_style'
    ];
}
