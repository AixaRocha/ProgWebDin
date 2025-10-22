@extends('layouts.app')
@section ('content')
<h1> Listado de materiales </h1>

<table>
<thead>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th>Precio</th>
        <th>stock</th>
        <th>Ver</th>
    </tr>
</thead>
<tbody>
    @foreach($materiales as $material)
    <tr>
        <td> {{$material -> id}}</td>
        <td> {{$material -> Nombre}}</td>
        <td>{{$material ->descripcion}}</td>
        <td>{{$material -> precio}}</td>
        <td>{{$material -> stock}}</td>
        <td>
            <a href="{{ url'/vistas_materiales/'.$material ->id}}">Ver detalle</a>
        </td>
    </tr>
    @endforeach
</tbody>

</table>
@endsection