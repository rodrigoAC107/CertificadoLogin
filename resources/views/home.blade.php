@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h3 class="text-center">Solicitud de Permiso de Tránsito durante emergencia por Coronavirus
            </h3>
            <h6 class="text-center">Durante el periodo de estado de emergencia por COVID-19, deberás solicitar un permiso especial para circular por la vía pública sólo si es absolutamente necesario y si tu condición laboral lo requiere.
            </h6>
            <div class="card">
                <div class="card-header">Excempos al decreto</div>
                <div class="card-body">
                    <p class="card-text">
                        1. Personal de Salud, Fuerzas de seguridad, Fuerzas Armadas, actividad migratoria, servicio meteorológico nacional, bomberos y control de tráfico aéreo.
                      </p>
                      <p> 
                        2. Autoridades superiores de los gobiernos nacional, provinciales, municipales y de la Ciudad Autónoma de Buenos Aires Trabajadores y trabajadoras del sector público nacional, provincial,municipal y de la Ciudad Autónoma de Buenos Aires, convocados para garantizar actividades esenciales requeridas por las respectivas autoridades. 
                    </p> 
                    <p>
                        3. Personal de los servicios de justicia de turno, conforme establezcan las autoridades competentes.
                    </p>
                    <p>    
                        4. Personal diplomático y consular extranjero acreditado ante el gobierno argentino, en el marco de la Convención de Viena sobre Relaciones Diplomáticas y la Convención de Viena de 1963 sobre Relaciones Consulares y al personal de los organismos internacionales acreditados ante el gobierno argentino, de la Cruz Roja y Cascos Blancos. 
                    </p>
                    <p>   
                        5. Personas que deban asistir a otras con discapacidad; familiares que necesiten asistencia; a personas mayores; a niños, a niñas y a adolescentes.
                    </p>
                    <p> 
                        6. Personas que deban atender una situación de fuerza mayor.
                    </p>
                    <p> 
                        7. Personas afectadas a la realización de servicios funerarios, entierros y cremaciones. En tal marco, no se autorizan actividades que signifiquen reunión de personas.
                    </p>
                    <p>   
                        8. Personas afectadas a la atención de comedores escolares, comunitarios y merenderos.
                    </p> 
                    <p>  
                        9. Personal que se desempeña en los servicios de comunicación audiovisuales, radiales y gráficos.
                    </p>
                    <p>   
                        10. Personal afectado a obra pública.
                    </p>
                    <p>   
                        11. Supermercados mayoristas y minoristas y comercios minoristas de proximidad. Farmacias. Ferreterías. Veterinarias. Provisión de garrafas.
                    </p>
                    <p>   
                        12. Industrias de alimentación, su cadena productiva e insumos; de higiene personal y limpieza; de equipamiento médico, medicamentos, vacunas y otros insumos sanitarios.
                    </p>
                    <p>   
                        13. Actividades vinculadas con la producción, distribución y comercialización agropecuaria y de pesca.
                    </p>
                    <p>   
                        14. Actividades de telecomunicaciones, internet fija y móvil y servicios digitales.
                    </p>
                    <p>   
                        15. Actividades impostergables vinculadas con el comercio exterior.
                    </p>
                    <p>   
                        16. Recolección, transporte y tratamiento de residuos sólidos urbanos, peligrosos y patogénicos.
                    </p>
                    <p>   
                        17. Mantenimiento de los servicios básicos (agua, electricidad, gas, comunicaciones, etc.) y atención de emergencias.
                    </p>
                    <p>   
                        18. Transporte público de pasajeros, transporte de mercaderías, petróleo, combustibles y GLP.
                    </p>
                    <p>   
                        19. Reparto a domicilio de alimentos, medicamentos, productos de higiene, de limpieza y otros insumos de necesidad.
                    </p>
                    <p>   
                        20. Servicios de lavandería.
                    </p>
                    <p>   
                        21. Servicios postales y de distribución de paquetería.
                    </p>
                    <p>   
                        22. Servicios esenciales de vigilancia, limpieza y guardia.
                    </p>
                    <p>   
                        23. Guardias mínimas que aseguren la operación y mantenimiento de Yacimientos de Petróleo y Gas, plantas de tratamiento y/o refinación de Petróleo y gas, transporte y distribución de energía eléctrica, combustibles líquidos, petróleo y gas, estaciones expendedoras de combustibles y generadores de energía eléctrica.
                    </p>
                       <p>
                        24. S.E. Casa de Moneda, servicios de cajeros automáticos, transporte de caudales y todas aquellas actividades que el BANCO CENTRAL DE LA REPÚBLICA ARGENTINA disponga imprescindibles para garantizar el funcionamiento del sistema de pagos.</p>
                </div>
                <div class="card-footer">
                    <div class="row">
                    <div class="custom-control custom-checkbox col-md-2">
                        <input type="checkbox" class="custom-control-input" id="customCheck1"
                        onclick="javascript:comprobar(this);">
                        <label class="custom-control-label" for="customCheck1">Estoy de acuerdo</label>
                      </div>
                    <a class="btn btn-info text-white" style="display:none" name="btButton" id="btButton" href="{{route('organizacion.index')}}">Aceptar</a>
                </div>  
            </div>
                {{-- <i class="fas fa-users-class"></i> --}}
            </div>
        </div>
    </div>
</div>

<script>
    function comprobar(obj){   
        if (obj.checked){
            document.getElementById('btButton').style.display = "";
        } else{
            document.getElementById('btButton').style.display = "none";
        }     
    }
    </script>
@endsection
