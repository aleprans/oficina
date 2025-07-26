<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HorimetrosController extends Controller
{
    public function index(){
        if(Auth::check()) {
            $horimetros = DB::table('horimetros')
            ->join('embarcacoes', 'horimetros.emb', '=', 'embarcacoes.id')
            ->select(DB::raw('DATE_FORMAT(horimetros.data, "%d/%m/%Y") as dataF'), 'horimetros.*', 'embarcacoes.embarcacao')
            ->orderBy('horimetros.data', 'desc')
            ->orderBy('horimetros.emb', 'desc')
            ->get();
            // dd($horimetros);
            return view('horimetros', compact('horimetros'));
        }else {
            return redirect('/');
        }
    }
}
