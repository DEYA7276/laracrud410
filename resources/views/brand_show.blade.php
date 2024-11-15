@extends('layout.main_template')

@section('content')
<button><a href="{{route('brands.index')}}">Marcas</a></button>

<h1>Detalles de la marca</h1>

<h3>Marca: {{$brand->brand}} </h3>
<h3>Descripcion: {{$brand->description}} </h3>

<!--  TODO Show Image -->
@endsection