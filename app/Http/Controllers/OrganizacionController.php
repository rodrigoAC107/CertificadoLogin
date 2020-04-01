<?php

namespace App\Http\Controllers;

use App\Organizacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrganizacionController extends Controller
{
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
            'email_organizacion' => 'required|email',
            'inciso_organizacion' => 'required'
        ];

        $this->validate($request, $rules);

        $campos = $request->all();

        $cuitOrg = $request->cuit_org ? $request->cuit_org : Auth::user()->cuit_organizacion;

        $usuario = Organizacion::create($campos);

        return redirect()->route('certificado.create');
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
