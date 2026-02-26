@extends('layouts.app')

@section('content')
<h3>Detalle del Producto</h3>

<div class="card">
    <div class="card-body">
        <h5 class="card-title">{{ $product->name }}</h5>
        <p><strong>Descripción:</strong> {{ $product->description ?? 'N/A' }}</p>
        <p><strong>Precio:</strong> ${{ number_format($product->price, 2) }}</p>
        <p><strong>Stock:</strong> {{ $product->stock }}</p>

        <a class="btn btn-warning" href="{{ route('products.edit', $product) }}">Editar</a>
        <a class="btn btn-secondary" href="{{ route('products.index') }}">Volver</a>
    </div>
</div>
@endsection