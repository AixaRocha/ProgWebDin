@extends ('layouts.app')
@section('content')

<h1>Detalles del material</h1>
<p><strong> ID :</strong> {{$material->id }}</p>
<p><strong> Nombre:</strong> {{$material->nombre }}</p>
<p><strong> Descripcion:</strong> {{$material->descripcion }}</p>
<p><strong> Precio:</strong> {{$material->precio }}</p>
<p><strong>  Stock:</strong> {{$material->stock }}</p>

<a href="{{ usl('/vistas_materiales') }}">Volver al listado</a>
@endsection