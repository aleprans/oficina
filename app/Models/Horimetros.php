<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Horimetros extends Model
{
    protected $fillable = [
        'data',
        'emb',
        'BB',
        'BE'
    ];
}
