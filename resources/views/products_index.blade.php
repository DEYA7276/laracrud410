@extends('layout.main_template')

@section('content')
<h2> Index products </h2>
<br>
<button><a href="{{route('products.create')}}">Crear  producto</a></button>
@endsection

