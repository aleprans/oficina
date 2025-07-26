<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Embarcacoes extends Model
{
    protected $fillable = [
        'embarcacao',
        'slug'
    ];
}
