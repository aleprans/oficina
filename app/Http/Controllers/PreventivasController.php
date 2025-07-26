<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PreventivasController extends Controller
{
    public function index(){
        if(Auth::check()) {
            $preventivas = DB::table('preventivas')
            ->join('embarcacoes', 'preventivas.embarcacao', '=', 'embarcacoes.id')
            ->select(DB::raw('DATE_FORMAT(preventivas.data, "%d/%m/%Y") as dataF'), 'preventivas.*', 'embarcacoes.embarcacao as emb')
            ->orderBy('preventivas.data', 'desc')
            ->orderBy('preventivas.embarcacao', 'desc')
            ->get();
            // dd($preventivas);
            return view('preventivas', compact('preventivas'));
        }else {
            return redirect('/');
        }
    }
}
