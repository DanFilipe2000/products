<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Product</title>
</head>
<body>
    <h1>Criar produto</h1>
    <form action="/store" method="POST">
        @csrf
        <input name="name" placeholder="Nome" type="text">
        <input name="description" placeholder="Descrição" type="text">
        <input name="price" placeholder="Preço" type="number">
        <button type="submit">Criar</button>
    </form>
</body>
</html>