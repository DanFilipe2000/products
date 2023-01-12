<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Produto</title>
</head>
<body>
    <h1>Editar Produto</h1>
    <form action="/update/{{ $product->id }}" method="POST">
        @csrf
        <input name="name" value="{{ $product->name }}" type="text">
        <input name="description" value="{{ $product->description }}" type="text">
        <input name="price" value="{{ $product->price }}" type="number" step="any">
        <button type="submit">Editar</button>
    </form>
</body>
</html>