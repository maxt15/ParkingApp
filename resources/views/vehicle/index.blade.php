@extends('masterTemplate')
@section('title','Agregar nuevo vehiculo')

@section('content')

    <h1>Listado de vehiculos</h1>

    
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>Id</th>
                    <th>Tipo</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Color</th>
                    <th>Numero de placa</th>
                    <th>Editar</th>
                </tr>
            </thead>
            @foreach ($vehicles as $vehicle)
            <tbody>
                <tr>
                    <th scope="row">{{$vehicle->id}}</td>
                    <td>{{$vehicle->type}}</td>
                    <td>{{$vehicle->carbrand}}</td>
                    <td>{{$vehicle->model}}</td>
                    <td>{{$vehicle->color}}</td>
                    <td>{{$vehicle->licenseplate}}</td>
                </tr>
            </tbody>    
            @endforeach
        </table>

    
@endsection