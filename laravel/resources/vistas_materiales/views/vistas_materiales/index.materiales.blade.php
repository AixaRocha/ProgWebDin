@extends('master_materiales')
@section ('titulo', 'Listado de Materiales')
@section ('contenido)

<h2 class="mb-4">Listado de Materiales</h2>
<table class="table table-bordered table-hover">
<thead class="table-dark">
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
            <a href="{{ url'/vistas_materiales/'.$material ->id }}" class="btn btn-info btn-s">Ver</a>
        </td>
    </tr>
    @endforeach
</tbody>

</table>
@endsection