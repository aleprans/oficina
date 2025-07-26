<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CorretivasController extends Controller
{
    public function index(){
        if(Auth::check()){
            $corretivas = DB::table('corretivas')
            ->join('embarcacoes', 'corretivas.embarcacao', '=', 'embarcacoes.id')
            ->select(DB::raw('DATE_FORMAT(corretivas.data, "%d/%m/%Y") as data'), 'corretivas.descricao', 'corretivas.horimetroBB', 'corretivas.horimetroBE', 'embarcacoes.embarcacao')
            ->orderBy('corretivas.data', 'desc')
            ->get();
            
            // dd($corretivas);
            return view('corretivas', compact('corretivas'));
        }else {
            return view('login');
        }
    }
}
