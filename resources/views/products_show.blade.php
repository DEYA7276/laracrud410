@extends('layout.main_template')

@section('content')
<button><a href="{{route('products.index')}}">Productos</a></button>

<h1>Detalles del producto</h1>

<h3>Producto: {{$product->nameProducts}} </h3>
<h3>Cantidad: {{$product->stock}} </h3>
<h3>Precio: {{$product->unit_price}} </h3>
<h3>Imagen: {{$product->imagen}} </h3>
<!--  TODO Show Image -->
@endsection