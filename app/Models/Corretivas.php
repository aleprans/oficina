<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Corretivas extends Model
{
    protected $fillable = [
        'embarcacao',
        'descricao',
        'data',
        'horimetroBB',
        'horimetroBE'
    ];
}
