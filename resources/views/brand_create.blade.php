@extends('layout.main_template')

@section('content')


@include('fragments.formstyle')
<h1>Create de brand</h1>

<form action="{{route('brands.store')}}" method="POST">
@csrf

<label for="">Nombre de la marca</label>
<input type="text" name="brand">

<label for="">Descripcion</label>
<input type="text" name="description">

<br>
<button type="submit"> Registrar </button>
</form>


@endsection