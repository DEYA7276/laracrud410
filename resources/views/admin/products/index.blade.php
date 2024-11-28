<!-- resources/views/admin/products/index.blade.php -->

@extends('layout.main_template')

@section('content')
<h2>Index productos</h2>
<br>
<button><a href="{{ route('products.create') }}">Crear producto</a></button>
<button><a href="{{ route('brands.create') }}">Agregar marca</a></button>
<button><a href="{{ route('brands.index') }}">Marcas existentes</a></button>
<button><a href="{{ route('products.index') }}">Productos</a></button>

<table>
    <thead>
        <tr>
            <th>Nombre del producto</th>
            <th>Marca</th>
            <th>Cantidad</th>
            <th>Descripcion</th>
            <th>Precio</th>
            <th>Imagen</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($products as $p)
            <tr>
                <td>{{ $p->nameProducts }}</td>
                <td>{{ $p->brand->brand }}</td> <!-- Mostrar el nombre de la marca -->
                <td>{{ $p->stock }}</td>
                <td>{{ $p->brand->description }}</td>
                <td>{{ $p->unit_price }}</td>
                <td><img src="{{ asset('image/products/'.$p->imagen) }}" width="60" alt="{{ $p->nameProducts }}"></td>
                <td>
                    <button><a href="{{ route('products.show', $p) }}">Mostrar</a></button>
                    <button><a href="{{ route('products.edit', $p) }}">Editar</a></button>
                    <button><a href="{{ route('products.destroy', $p) }}" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $p->id }}').submit();">Eliminar</a></button>
                    
                    <form id="delete-form-{{ $p->id }}" action="{{ route('products.destroy', $p) }}" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
{{$products->links()}}<!-- genera los enlaces de cada pagina -->
@endsection
