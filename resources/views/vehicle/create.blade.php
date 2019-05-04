@extends('masterTemplate')
@section('title','Agregar nuevo vehiculo')

@section('content')
    <h1>Agregar nuevo vehiculo</h1>    
    <form class="form-group" method="POST" action="/vehicles">
        
      @csrf

        <div class="form-group">
              <label for="">Tipo</label>
              <select class="form-control" name="type">
                <option>Automovil</option>
                <option>Camioneta</option>
                <option>Motocicleta</option>
              </select>
        </div>
        <div class="form-group">
            <label for="">Marca</label>
            <input type="text" name="carbrand" class="form-control"    placeholder="Ingresa la marca del vehiculo">
        </div>
        <div class="form-group">
          <label for="">Modelo</label>
          <input type="text" name="model" class="form-control"    placeholder="Ingresa modelo">
        </div>
        <div class="form-group">
            <label for="color">Color</label>
            <input type="text" name="color" class="form-control" id="color" placeholder="Ingresa el color del vehiculo">
          </div>
          <div class="form-group">
            <label for="licenseplate">Numero placa</label>
            <input type="text" name="licenseplate" class="form-control" id="licenseplate" placeholder="Ingresa numero de la placa">
          </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </form>
@endsection