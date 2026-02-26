@extends('layouts.app')

@section('content')
<h3>Editar Producto</h3>
<form action="{{ route('products.update', $product) }}" method="POST">
    @method('PUT')
    @include('products._form', ['product' => $product])
</form>
@endsection