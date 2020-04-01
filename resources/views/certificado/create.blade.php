@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="{{route('certificado.store')}}">
        @csrf
        <h3>Formulario para agregar empleados</h3>
        <input type="hidden" name="cuitOrg" value="{{$cuitOrg}}">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputNomEmp">Nombre</label>
              <input type="text" name="nombre_empleado" class="form-control" id="inputNomEmp">
            </div>
            <div class="form-group col-md-6">
              <label for="inputApellidoEmp">Apellido</label>
              <input type="text" name="apellido_empleado" class="form-control" id="inputApellidoEmp">
            </div>      
            <div class="form-group col-md-5">
              <label for="dni_empleado">Dni</label>
              <input type="number" name="dni_empleado" class="form-control{{ $errors->has('dni_empleado') ? ' is-invalid' : '' }}" id="dni_empleado">
              @if ($errors->has('dni_empleado'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('dni_empleado') }}</strong>
                </span>
              @endif
            </div>
            <div class="form-group col-md-2">
              <label for="exampleFormControlSelect1">CUIT/CUIL</label>
              <select name="cuit_cuil_empleado" class="form-control" id="exampleFormControlSelect1">
                <option>CUIT</option>
                <option>CUIL</option>          
              </select>
            </div>
            <div class="form-group col-md-5">
              <label for="numero_cuit_cuil_empleado">Numero</label>
              <input type="number" name="numero_cuit_cuil_empleado" class="form-control{{ $errors->has('numero_cuit_cuil_empleado') ? ' is-invalid' : '' }}" id="numero_cuit_cuil_empleado">
              @if ($errors->has('numero_cuit_cuil_empleado'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('numero_cuit_cuil_empleado') }}</strong>
                </span>
              @endif
            </div>      
            <div class="form-group col-md-6">
              <label for="inputTelEmp">Telefono</label>
              <input type="number" name="telefono_empleado"  class="form-control" id="inputTelEmp">
            </div>
            <div class="form-group col-md-6">
              <label for="inputDirEmp">Direccion</label>
              <input type="text" name="direccion_empleado"  class="form-control" id="inputDirEmp">
            </div>
            <div class="form-group col-md-2">
              <label for="selectHoraIng">Hora Ingreso</label>
              <select name="hora_ingreso_empleado"  class="form-control" id="selectHoraIng">
                <option>06:00</option>
                <option>07:00</option>
                <option>07:00</option>          
                <option>07:00</option>          
                <option>07:00</option>          
                <option>07:00</option>          
                <option>07:00</option>          
                <option>07:00</option>          
                <option>07:00</option>          
                <option>07:00</option>   
              </select>
            </div> 
            <div class="form-group col-md-2">
              <label for="selectHoraIng">Hora Salida</label>
              <select name="hora_salida_empleado" class="form-control" id="selectHoraIng">
                <option>06:00</option>
                <option>07:00</option>
                <option>07:00</option>          
                <option>07:00</option>          
                <option>07:00</option>          
                <option>07:00</option>          
                <option>07:00</option>          
                <option>07:00</option>          
                <option>07:00</option>          
                <option>07:00</option>   
              </select>
            </div>
            <div class="form-group col-md-8">
              <label for="inputDirEmp">Escriba los dias laborales del empleado. ej: "Lunes a Viernes" , "lunes Martes y Jueves"</label>
              <input type="text" name="dias_laborables_empleado" class="form-control" id="inputDirEmp">
            </div>
          </div>       
          <button type="submit" class="btn btn-primary">Grabar</button>
        <a href="{{url('/home')}}" class="btn btn-danger m-2">Cancelar</a>
        </form>

        @if($certificados)
        <div class="container">
            <h3>Lista de empleados</h3>
            <table class="table table-hover" >
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Dni</th>
                    <th scope="col">Acciones</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($certificados as $certifi) 
                  <tr>
                    <th scope="row">#</th>
                    <td>{{$certifi->nombre_empleado}}</td>
                    <td>{{$certifi->apellido_empleado}}</td>
                    <td>{{$certifi->dni_empleado}}</td>
                    <td>
                      <form action="{{ route('certificado.destroy',$certifi->id) }}" method="POST">
        
                        <a class="btn btn-primary" href="{{ route('certificado.edit',$certifi->id) }}">Edit</a>
       
                        @csrf
                        @method('DELETE')
          
                      <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                    </td>
                  </tr>   
                @endforeach 
                </tbody>
              </table>   
            </div>
        @endif
</div>
@endsection