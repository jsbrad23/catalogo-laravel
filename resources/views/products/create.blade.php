@extends('layouts.app')

@section('content')
<h3>Nuevo Producto</h3>
<form action="{{ route('products.store') }}" method="POST">
    @include('products._form')
</form>
@endsection