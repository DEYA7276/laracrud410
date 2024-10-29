@extends('layout.main_template')

@section('content')


@include('fragments.formstyle')
<h1>Create de productos</h1>

<form action="{{route('products.store')}}" method="POST">
@csrf

<label for="">Nombre de producto</label>
<input type="text" name="nameProducts">

<label for="">Marca</label>
<input type="text" name="brand">

<label for="">Cantidad</label>
<input type="number" name="stock">

<label for="">Precio unitario</label>
<input type="number" name="unit_price">


<label for="">Imagen</label>
<input type="text" name="imagen">

<br>
<button type="submit"> Registrar </button>
</form>


@endsection