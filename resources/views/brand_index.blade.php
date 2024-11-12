@extends('layout.main_template')

@section('content')
<h2> Index brands </h2>
<br>
<button><a href="{{route('brands.create')}}">Agregar marca</a></button>

<table>

    <thead>
        <th>Nombre de la marca</th>
        <th>Descripcion</th>
      
        
    </thead>



    <tbody>

        @foreach ($brands as $b)
            <tr>
                <td>{{$b->brand}}</td>
                <td>{{$b->description}}</td>
               
               
            </tr>
        @endforeach

    </tbody>
</table>
@endsection

