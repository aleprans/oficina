<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        $horimetros = DB::table('horimetros')
        // ->groupBy('data')
        ->get();
        dd($horimetros);


        return view('home', compact('horimetros'));
    }
}
