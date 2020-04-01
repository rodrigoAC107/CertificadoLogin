@extends('layouts.app')

@section('content')
<div class="container">
  <h3>Formulario para agregar empresa</h3>
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
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
          </div>   
          <button type="submit" class="btn btn-primary">Grabar</button>
        <a href="{{url('/')}}" class="btn btn-danger m-2">Cancelar</a>
        </form>        
</div>
@endsection