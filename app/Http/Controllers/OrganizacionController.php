<?php

namespace App\Http\Controllers;

use App\User;
use App\Organizacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrganizacionController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('organizacion.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'razon_social_organizacion' => 'required',
            'descripcion_organizacion' => 'required',
            'direccion_organizacion' => 'required',
            'cuit_organizacion' => 'required|unique:organizacion',
            'rubro_organizacion' => 'required',
            'actividad_organizacion' => 'required',
            'telefono_organizacion' => 'required',
            'email_organizacion' => 'required|email|unique:organizacion',
            'inciso_organizacion' => 'required'
        ];

        $this->validate($request, $rules);

        if(Auth::user()->cuit_organizacion != $request->cuit_organizacion){
            return redirect()->route('organizacion.index')->with('error','Ingresa el mismo CUIT que el de tu usuario');
        }

        $campos = $request->all();

        $cuitOrg = $request->cuit_org ? $request->cuit_org : Auth::user()->cuit_organizacion;

        $usuario = Organizacion::create($campos);

        $User = User::where('cuit_organizacion', $request->cuit_organizacion)->update([
            'organizacion' => 1
        ]);

        return redirect()->route('certificado.create')->with('succes', 'Organización creada correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $organizacion = Organizacion::where('cuit_organizacion', $id)->get();

        return view('organizacion.edit', compact('organizacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $rules = [
            'razon_social_organizacion' => 'required',
            'descripcion_organizacion' => 'required',
            'direccion_organizacion' => 'required',
            'rubro_organizacion' => 'required',
            'actividad_organizacion' => 'required',
            'telefono_organizacion' => 'required',
            'email_organizacion' => 'required|email',
            'inciso_organizacion' => 'required'
        ];

        $this->validate($request, $rules);

        $organizacion = Organizacion::where('cuit_organizacion', $id)->update([
            'razon_social_organizacion' => $request->razon_social_organizacion,
            'descripcion_organizacion' => $request->descripcion_organizacion,
            'direccion_organizacion' => $request->direccion_organizacion,
            'rubro_organizacion' => $request->rubro_organizacion,
            'actividad_organizacion' => $request->actividad_organizacion,
            'telefono_organizacion' => $request->telefono_organizacion,
            'email_organizacion' => $request->email_organizacion,
            'inciso_organizacion' => $request->inciso_organizacion
        ]);


        return redirect()->route('certificado.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
