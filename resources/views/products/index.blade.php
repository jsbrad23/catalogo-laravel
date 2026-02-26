@extends('layouts.app')

@section('content')

<div class="card p-4">
    <h3 class="mb-4">Lista de Productos</h3>

    <div class="table-responsive">
        <table class="table table-hover align-middle">
            <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Stock</th>
                <th width="260">Acciones</th>
            </tr>
            </thead>
            <tbody>
            @forelse($products as $product)
                <tr>
                    <td>#{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td><strong>${{ number_format($product->price, 2) }}</strong></td>
                    <td>
                        <span class="badge bg-info">
                            {{ $product->stock }}
                        </span>
                    </td>
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
                <tr>
                    <td colspan="5" class="text-center text-muted">No hay productos registrados.</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>

    {{ $products->links() }}
</div>

@endsection