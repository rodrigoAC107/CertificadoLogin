@extends('layouts.app')

@section('content')
<div class="container">
@foreach($empleado as $empleados)
<form method="POST" action="{{route('certificado.update', $empleados->id)}}">
    {{method_field('PUT')}}
    @csrf
    <h3>Formulario para agregar empleados</h3>
    {{-- <input type="hidden" name="cuitOrg" value="{{$cuitOrg}}"> --}}
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="nombre_empleado">Nombre</label>
          <input type="text" name="nombre_empleado" class="form-control{{ $errors->has('nombre_empleado') ? ' is-invalid' : '' }}" id="nombre_empleado" value="{{$empleados->nombre_empleado}}">
          @if ($errors->has('nombre_empleado'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('nombre_empleado') }}</strong>
            </span>
          @endif
        </div>
        <div class="form-group col-md-6">
          <label for="apellido_empleado">Apellido</label>
          <input type="text" name="apellido_empleado" class="form-control{{ $errors->has('apellido_empleado') ? ' is-invalid' : '' }}" id="apellido_empleado" value="{{$empleados->apellido_empleado}}">
          @if ($errors->has('apellido_empleado'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('apellido_empleado') }}</strong>
            </span>
          @endif
        </div>      
        <div class="form-group col-md-5">
          <label for="dni_empleado">Dni</label>
          <input type="number" name="dni_empleado" class="form-control{{ $errors->has('dni_empleado') ? ' is-invalid' : '' }}" id="dni_empleado" value="{{$empleados->dni_empleado}}">
          @if ($errors->has('dni_empleado'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('dni_empleado') }}</strong>
            </span>
          @endif
        </div>
        <div class="form-group col-md-2">
          <label for="cuit_cuil_empleado">CUIT/CUIL</label>
          <select name="cuit_cuil_empleado" class="form-control{{ $errors->has('cuit_cuil_empleado') ? ' is-invalid' : '' }}" id="cuit_cuil_empleado">
            <option>CUIT</option>
            <option>CUIL</option>          
          </select>
          @if ($errors->has('cuit_cuil_empleado'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('cuit_cuil_empleado') }}</strong>
            </span>
          @endif
        </div>
        <div class="form-group col-md-5">
          <label for="numero_cuit_cuil_empleado">Numero</label>
          <input type="number" name="numero_cuit_cuil_empleado" class="form-control{{ $errors->has('numero_cuit_cuil_empleado') ? ' is-invalid' : '' }}" id="numero_cuit_cuil_empleado" value="{{$empleados->numero_cuit_cuil_empleado}}">
          @if ($errors->has('numero_cuit_cuil_empleado'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('numero_cuit_cuil_empleado') }}</strong>
            </span>
          @endif
        </div>      
        <div class="form-group col-md-6">
          <label for="telefono_empleado">Telefono</label>
          <input type="number" name="telefono_empleado"  class="form-control{{ $errors->has('telefono_empleado') ? ' is-invalid' : '' }}" id="telefono_empleado" value="{{$empleados->telefono_empleado}}">
          @if ($errors->has('telefono_empleado'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('telefono_empleado') }}</strong>
            </span>
          @endif
        </div>
        <div class="form-group col-md-6">
          <label for="direccion_empleado">Direccion</label>
          <input type="text" name="direccion_empleado"  class="form-control{{ $errors->has('direccion_empleado') ? ' is-invalid' : '' }}" id="direccion_empleado" value="{{$empleados->direccion_empleado}}">
          @if ($errors->has('direccion_empleado'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('direccion_empleado') }}</strong>
            </span>
          @endif
        </div>
        <div class="form-group col-md-2">
          <label for="hora_ingreso_empleado">Hora Ingreso</label>
          <select name="hora_ingreso_empleado"  class="form-control{{ $errors->has('hora_ingreso_empleado') ? ' is-invalid' : '' }}" id="hora_ingreso_empleado">
            <option>00:00</option>
            <option>01:00</option>
            <option>02:00</option>          
            <option>03:00</option>          
            <option>04:00</option>          
            <option>05:00</option>          
            <option>06:00</option>          
            <option>07:00</option>          
            <option>08:00</option>          
            <option>09:00</option>
            <option>10:00</option>   
            <option>11:00</option>   
            <option>12:00</option>   
            <option>13:00</option>   
            <option>14:00</option>   
            <option>15:00</option>   
            <option>16:00</option>   
            <option>17:00</option>   
            <option>18:00</option>   
            <option>19:00</option>   
            <option>20:00</option>   
            <option>21:00</option>   
            <option>22:00</option>   
            <option>23:00</option>     
          </select>
          @if ($errors->has('hora_ingreso_empleado'))
          <span class="invalid-feedback">
              <strong>{{ $errors->first('hora_ingreso_empleado') }}</strong>
          </span>
        @endif
        </div> 
        <div class="form-group col-md-2">
          <label for="hora_salida_empleado">Hora Salida</label>
          <select name="hora_salida_empleado" class="form-control{{ $errors->has('hora_salida_empleado') ? ' is-invalid' : '' }}" id="hora_salida_empleado">
            <option>00:00</option>
            <option>01:00</option>
            <option>02:00</option>          
            <option>03:00</option>          
            <option>04:00</option>          
            <option>05:00</option>          
            <option>06:00</option>          
            <option>07:00</option>          
            <option>08:00</option>          
            <option>09:00</option>
            <option>10:00</option>   
            <option>11:00</option>   
            <option>12:00</option>   
            <option>13:00</option>   
            <option>14:00</option>   
            <option>15:00</option>   
            <option>16:00</option>   
            <option>17:00</option>   
            <option>18:00</option>   
            <option>19:00</option>   
            <option>20:00</option>   
            <option>21:00</option>   
            <option>22:00</option>   
            <option>23:00</option>     
          </select>
          @if ($errors->has('hora_salida_empleado'))
          <span class="invalid-feedback">
              <strong>{{ $errors->first('hora_salida_empleado') }}</strong>
          </span>
        @endif
        </div>
        <div class="form-group col-md-8">
          <label for="inputDirEmp">Escriba los dias laborales del empleado. ej: "Lunes a Viernes" , "lunes Martes y Jueves"</label>
          <input type="text" name="dias_laborables_empleado" class="form-control{{ $errors->has('dias_laborables_empleado') ? ' is-invalid' : '' }}" id="dias_laborables_empleado" value="{{$empleados->dias_laborables_empleado}}">
          @if ($errors->has('dias_laborables_empleado'))
          <span class="invalid-feedback">
              <strong>{{ $errors->first('dias_laborables_empleado') }}</strong>
          </span>
        @endif
        </div>
      </div>       
      <button type="submit" class="btn btn-primary">Grabar</button>
    <a href="{{url('/home')}}" class="btn btn-danger m-2">Cancelar</a>
    </form>

    @endforeach

    @endsection