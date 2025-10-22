@extends('master_materiales')
@section ('titulo', 'Detalles de Materiales')
@section ('contenido)

<h2 class="mb-4">Detalles del material</h2>
<p><strong> ID :</strong> {{$material->id }}</p>
<p><strong> Nombre:</strong> {{$material->nombre }}</p>
<p><strong> Descripcion:</strong> {{$material->descripcion }}</p>
<p><strong> Precio:</strong> {{$material->precio }}</p>
<p><strong>  Stock:</strong> {{$material->stock }}</p>

<a href="{{ usl('/vistas_materiales') }}" class="btn btn-secondary mt-3">Volver al listado</a>
@endsection
