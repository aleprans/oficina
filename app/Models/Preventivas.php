<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Preventivas extends Model
{
    protected $fillable = [
        'embarcacao',
        'data',
        'BB',
        'BE',
        'olub',
        'filOlub',
        'filComb',
        'filRacor',
        'olRev',
        'filRev',
        'obs'
    ];
}
