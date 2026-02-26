@extends('layouts.app')

@section('content')
<h3 class="mb-3">Productos</h3>

<table class="table table-bordered table-striped">
    <thead>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Stock</th>
        <th style="width:260px;">Acciones</th>
    </tr>
    </thead>
    <tbody>
    @forelse($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>${{ number_format($product->price, 2) }}</td>
            <td>{{ $product->stock }}</td>
            <td>
                <a class="btn btn-primary btn-sm" href="{{ route('products.show', $product) }}">Ver</a>
                <a class="btn btn-warning btn-sm" href="{{ route('products.edit', $product) }}">Editar</a>

                <form class="d-inline" action="{{ route('products.destroy', $product) }}" method="POST"
                      onsubmit="return confirm('¿Eliminar este producto?');">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                </form>
            </td>
        </tr>
    @empty
        <tr><td colspan="5" class="text-center">No hay productos.</td></tr>
    @endforelse
    </tbody>
</table>

{{ $products->links() }}
@endsection