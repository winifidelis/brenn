<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //return view('administracao.home');
        //return redirect()->route('produto.index')->with('toastSuccess', 'Saída de produto realizado com sucesso.');
        return redirect()->route('inicio');
    }

    public function dashbackend(){
        return view('administracao.home');
    }
}
