<?php

namespace App\Http\Controllers;

use App\Certificado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CertificadoController extends Controller
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cuitOrg = Auth::user()->cuit_organizacion;

        $certificados = Certificado::where('organizacion_id', $cuitOrg)->get();

        if($certificados){
            return view('certificado.create', compact('cuitOrg', 'certificados'));
        }
        
        $certificados = null;
        return view('certificado.create', compact('cuitOrg', 'certificados'));
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
            "nombre_empleado" => "required",
            "apellido_empleado" => "required",
            "dni_empleado" => "required|unique:certificados",
            "cuit_cuil_empleado" => "required",
            "numero_cuit_cuil_empleado" => "required|unique:certificados",
            "telefono_empleado" => "required",
            "direccion_empleado" => "required",
            "hora_ingreso_empleado" => "required",
            "hora_salida_empleado" => "required",
            "dias_laborables_empleado" => "required",
        ];
        
        $this->validate($request, $rules);

        $cuitOrg = $request->cuitOrg;
        
        $campos = new Certificado();

        $campos->organizacion_id = $request->cuitOrg;
        $campos->nombre_empleado = $request->nombre_empleado;
        $campos->apellido_empleado = $request->apellido_empleado;
        $campos->dni_empleado = $request->dni_empleado;
        $campos->cuit_cuil_empleado = $request->cuit_cuil_empleado;
        $campos->numero_cuit_cuil_empleado = $request->numero_cuit_cuil_empleado;
        $campos->telefono_empleado = $request->telefono_empleado;
        $campos->direccion_empleado = $request->direccion_empleado;
        $campos->hora_ingreso_empleado = $request->hora_ingreso_empleado;
        $campos->hora_salida_empleado = $request->hora_salida_empleado;
        $campos->dias_laborables_empleado = $request->dias_laborables_empleado;

        $campos->save();

        
        $certificados = Certificado::where('organizacion_id', $cuitOrg)->get();

        return view('certificado.crear_lista', compact('certificados', 'cuitOrg'));
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
        $empleado = Certificado::where('id', $id)->get();

        return view('certificado.edit', compact('empleado'));
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
            "nombre_empleado" => "required",
            "apellido_empleado" => "required",
            "dni_empleado" => "required",
            "cuit_cuil_empleado" => "required",
            "numero_cuit_cuil_empleado" => "required",
            "telefono_empleado" => "required",
            "direccion_empleado" => "required",
            "hora_ingreso_empleado" => "required",
            "hora_salida_empleado" => "required",
            "dias_laborables_empleado" => "required",
        ];

        $this->validate($request, $rules);

        $certificado = Certificado::where('id', $id)->update([
            "nombre_empleado"               => $request->nombre_empleado,
            "apellido_empleado"             => $request->apellido_empleado,
            "dni_empleado"                  => $request->dni_empleado,
            "cuit_cuil_empleado"            => $request->cuit_cuil_empleado,
            "numero_cuit_cuil_empleado"     => $request->numero_cuit_cuil_empleado,
            "telefono_empleado"             => $request->telefono_empleado,
            "direccion_empleado"            => $request->direccion_empleado,
            "hora_ingreso_empleado"         => $request->hora_ingreso_empleado,
            "hora_salida_empleado"          => $request->hora_salida_empleado,
            "dias_laborables_empleado"      => $request->dias_laborables_empleado
        ]);


        return redirect()->route('certificado.create')->with('success', 'Se actualizo el empleado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Certificado::where('id', $id)->delete();
  
        return redirect()->route('certificado.create')->with('success', 'Se elimino el empleado correctamente');
    }
}
