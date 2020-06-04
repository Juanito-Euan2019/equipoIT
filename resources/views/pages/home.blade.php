@extends('layout.app')
@section('content')

<table class="table">
    <thead>
      <tr>
        <th><abbr title="Position">Id</abbr></th>
        <th><abbr title="Played">Tipo de vehiculo</abbr></th>
        <th><abbr title="Played">Modelo</abbr></th>
        <th><abbr title="Played">Marca</abbr></th>
        <th><abbr title="Won">Descripción</abbr></th>
        <th><abbr title="Drawn">Costo</abbr></th>
      </tr>
    </thead>
    <tbody>
         @foreach ($vehiculos as $vehiculo)
            <tr>
                <td>{{ $vehiculo["id"] }}</td>
                <td>{{ $vehiculo["tipo de vehiculo"] }}</td>
                <td>{{ $vehiculo["Modelo"] }}</td>
                <td>{{ $vehiculo["Marca"] }}</td>
                <td>{{ $vehiculo["Descripcion"] }}</td>
                <td>{{ $vehiculo["amount"] }}</td>
            </tr>    
        @endforeach
    </tbody>
  </table>
@stop