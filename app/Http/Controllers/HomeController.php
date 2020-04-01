<?php

namespace App\Http\Controllers;

use App\Organizacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        // dd(Auth::user()->activo);
        $cuit = Auth::user()->cuit_organizacion;

        $organizacion = Organizacion::where('cuit_organizacion',$cuit)->get();

        // dd($organizacion);

        if ($organizacion->isEmpty()) {
            return view('home');
        }else{
            if (Auth::user()->activo != 1) {
                return view('welcome');
            }
            return redirect()->route('certificado.create');
        }
    }
}
