@extends('layouts.app')

@section('content')
<div class="container">
  @if (count($errors) > 0)
      <div class="alert alert-danger">
        <p>Corrige los siguientes errores:</p>
          <ul>
              @foreach ($errors->all() as $message)
                  <li>{{ $message }}</li>
              @endforeach
          </ul>
      </div>
  @endif
  @include('includes.error')
  <h3>Formulario para agregar Empresa/Organizacion</h3>
  <form method="POST" action="{{route('organizacion.store')}}">
    @csrf
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputRazonOrg">Razon Social</label>
              <input type="text" name="razon_social_organizacion" class="form-control" id="inputRazonOrg" required>
            </div>
            <div class="form-group col-md-6">
              <label for="inputDesOrg">Descripcion de la Empresa</label>
              <input type="text" name="descripcion_organizacion" class="form-control" id="inputDesOrg" required>
            </div>      
            <div class="form-group col-md-6">
              <label for="inputDirOrg">Direccion de la empresa</label>
              <input type="text" name="direccion_organizacion" class="form-control" id="inputDirOrg">
            </div>
            <div class="form-group col-md-6">
              <label for="inputCuitOrg">CUIT de la empresa</label>
              <input type="number" name="cuit_organizacion" class="form-control{{ $errors->has('cuit_organizacion') ? ' is-invalid' : '' }}" id="cuit_organizacion" required>
              @if ($errors->has('cuit_organizacion'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('cuit_organizacion') }}</strong>
                </span>
              @endif
            </div>
            <div class="form-group col-md-6">
              <label for="inputRubroOrg">Rubro</label>
              <input type="text" name="rubro_organizacion" class="form-control" id="inputRubroOrg" required>
            </div>
            <div class="form-group col-md-6">
              <label for="inputActividadOrg">Actividad</label>
              <input type="text" name="actividad_organizacion" class="form-control" id="inputActividadOrg" required>
            </div>
            <div class="form-group col-md-6">
              <label for="inputTelOrg">Telefono</label>
              <input type="number" name="telefono_organizacion" class="form-control" id="inputTelOrg" required>
            </div>
            <div class="form-group col-md-6">
              <label for="email_organizacion">Email</label>
              <input type="email_organizacion" name="email_organizacion" class="form-control{{ $errors->has('email_organizacion') ? ' is-invalid' : '' }}" id="email" required>
              @if ($errors->has('email_organizacion'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('email_organizacion') }}</strong>
                </span>
              @endif
            </div>      
          </div> 
          <div class="form-group">
            <label for="exampleFormControlSelect1">Seleccionar Inciso correspondiente</label>
            <select name="inciso_organizacion" class="form-control" id="exampleFormControlSelect1">
              <option>1. Personal de Salud, Fuerzas de seguridad, Fuerzas Armadas, actividad migratoria, servicio meteorológico nacional, bomberos y control de tráfico aéreo.</option>
              <option>2. Autoridades superiores de los gobiernos nacional, provinciales, municipales y de la Ciudad Autónoma de Buenos Aires Trabajadores y trabajadoras del sector público nacional, provincial,municipal y de la Ciudad Autónoma de Buenos Aires, convocados para garantizar actividades esenciales requeridas por las respectivas autoridades.</option>
              <option>3. Personal de los servicios de justicia de turno, conforme establezcan las autoridades competentes.</option>
              <option>4. Personal diplomático y consular extranjero acreditado ante el gobierno argentino, en el marco de la Convención de Viena sobre Relaciones Diplomáticas y la Convención de Viena de 1963 sobre Relaciones Consulares y al personal de los organismos internacionales acreditados ante el gobierno argentino, de la Cruz Roja y Cascos Blancos.</option>
              <option>5. Personas que deban asistir a otras con discapacidad; familiares que necesiten asistencia; a personas mayores; a niños, a niñas y a adolescentes.</option>
              <option>6. Personas que deban atender una situación de fuerza mayor.</option>
              <option>7. Personas afectadas a la realización de servicios funerarios, entierros y cremaciones. En tal marco, no se autorizan actividades que signifiquen reunión de personas.</option>
              <option>8. Personas afectadas a la atención de comedores escolares, comunitarios y merenderos.</option>
              <option>9. Personal que se desempeña en los servicios de comunicación audiovisuales, radiales y gráficos.</option>
              <option>10. Personal afectado a obra pública.</option>
              <option>11. Supermercados mayoristas y minoristas y comercios minoristas de proximidad. Farmacias. Ferreterías. Veterinarias. Provisión de garrafas.</option>
              <option>12. Industrias de alimentación, su cadena productiva e insumos; de higiene personal y limpieza; de equipamiento médico, medicamentos, vacunas y otros insumos sanitarios.</option>
              <option>13. Actividades vinculadas con la producción, distribución y comercialización agropecuaria y de pesca.</option>
              <option>14. Actividades de telecomunicaciones, internet fija y móvil y servicios digitales.</option>
              <option>15. Actividades impostergables vinculadas con el comercio exterior.</option>
              <option>16. Recolección, transporte y tratamiento de residuos sólidos urbanos, peligrosos y patogénicos.</option>
              <option>17. Mantenimiento de los servicios básicos (agua, electricidad, gas, comunicaciones, etc.) y atención de emergencias.</option>
              <option>18. Transporte público de pasajeros, transporte de mercaderías, petróleo, combustibles y GLP.</option>
              <option>19. Reparto a domicilio de alimentos, medicamentos, productos de higiene, de limpieza y otros insumos de necesidad.</option>
              <option>20. Servicios de lavandería.</option>
              <option>21. Servicios postales y de distribución de paquetería.</option>
              <option>22. Servicios esenciales de vigilancia, limpieza y guardia.</option>
              <option>23. Guardias mínimas que aseguren la operación y mantenimiento de Yacimientos de Petróleo y Gas, plantas de tratamiento y/o refinación de Petróleo y gas, transporte y distribución de energía eléctrica, combustibles líquidos, petróleo y gas, estaciones expendedoras de combustibles y generadores de energía eléctrica.</option>
              <option>24. S.E. Casa de Moneda, servicios de cajeros automáticos, transporte de caudales y todas aquellas actividades que el BANCO CENTRAL DE LA REPÚBLICA ARGENTINA disponga imprescindibles para garantizar el funcionamiento del sistema de pagos.</option>

            </select>
          </div>   
          <button type="submit" class="btn btn-primary">Grabar</button>
        <a href="{{url('/')}}" class="btn btn-danger m-2">Cancelar</a>
        </form>        
</div>
@endsection