<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Catálogo - Laravel</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f4f6f9;
        }

        .navbar {
            background: linear-gradient(90deg, #1e3c72, #2a5298);
        }

        .navbar-brand {
            font-weight: bold;
            letter-spacing: 1px;
        }

        .card {
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.08);
        }

        .btn-primary {
            background-color: #2a5298;
            border: none;
        }

        .btn-primary:hover {
            background-color: #1e3c72;
        }

        .btn-success {
            border-radius: 8px;
        }

        table {
            background: white;
            border-radius: 10px;
            overflow: hidden;
        }

        h3 {
            font-weight: 600;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark mb-4">
    <div class="container">
        <a class="navbar-brand" href="{{ route('products.index') }}">
            🛒 Catálogo Productos
        </a>
        <a class="btn btn-light" href="{{ route('products.create') }}">
            + Nuevo Producto
        </a>
    </div>
</nav>

<div class="container">

    @if(session('success'))
        <div class="alert alert-success shadow-sm">
            {{ session('success') }}
        </div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger shadow-sm">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @yield('content')
</div>

</body>
</html>