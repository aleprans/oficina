<?php

namespace App\Http\Controller;

use Illuminate\Http\Request;

class EmbarcacoesController extends Controller
{
    public function index(){
        return view('embarcacoes');
    }
}
