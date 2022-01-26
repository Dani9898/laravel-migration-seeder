<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $fillable = [

        'title',
        'duration',
        'genre',
        'date_of_pubblication'

    ];
}
