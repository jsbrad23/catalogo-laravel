@csrf

<div class="mb-3">
    <label class="form-label fw-bold">Nombre</label>
    <input class="form-control shadow-sm" name="name" required
           value="{{ old('name', $product->name ?? '') }}">
</div>

<div class="mb-3">
    <label class="form-label fw-bold">Descripción</label>
    <textarea class="form-control shadow-sm" name="description" rows="3">{{ old('description', $product->description ?? '') }}</textarea>
</div>

<div class="mb-3">
    <label class="form-label fw-bold">Precio</label>
    <input class="form-control shadow-sm" type="number" step="0.01" min="0" name="price" required
           value="{{ old('price', $product->price ?? 0) }}">
</div>

<div class="mb-3">
    <label class="form-label fw-bold">Stock</label>
    <input class="form-control shadow-sm" type="number" min="0" name="stock" required
           value="{{ old('stock', $product->stock ?? 0) }}">
</div>

<button class="btn btn-success" type="submit">Guardar</button>
<a class="btn btn-secondary" href="{{ route('products.index') }}">Volver</a>