@extends('layout.main_template')

@section('content')
<h2> Index brands </h2>
<br>
<button><a href="{{route('brands.create')}}">Agregar marca</a></button>
<button><a href="{{route('products.create')}}">Crear  producto</a></button>
<button><a href="{{route('products.index')}}">Productos</a></button>

<table>

    <thead>
        <th>Nombre de la marca</th>
        <th>Descripcion</th>
        <th>Acciones</th>
        
    </thead>



    <tbody>

        @foreach ($brands as $b)
            <tr>
                <td>{{$b->brand}}</td>
                <td>{{$b->description}}</td>
                <td>
                    
                    <button><a href="{{route("brands.show", $b)}}">Mostrar</a></button>
                    <button><a href="{{route("brands.edit", $b)}}">Editar</a></button>
                    <form action="{{route("brands.destroy",$b)}}" method="POST">
                        @method("DELETE")
                        @csrf
                    <button type="submit">Eliminar</button>
                    </form>
                </td>
               
            </tr>
        @endforeach

    </tbody>
</table>
@endsection

