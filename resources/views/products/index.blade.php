<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products</title>
</head>
<body>
    <h1>Produtos</h1>

    <ul>
        @foreach ($products as $item)
            <li>
                <a href="/show/{{ $item->id }}">
                    {{ $item->name }} - {{ $item->description }} - R${{ $item->price }}
                </a>
            </li>
        @endforeach
    </ul>

    <a href="/create">Criar Produto</a>
</body>
</html>