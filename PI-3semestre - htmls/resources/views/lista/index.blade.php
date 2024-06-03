<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"> 
</head>
<body>
    <main class="container mt-4">
    <div class="row">
        <div class="col-9">
            <h1>Lista de Produtos</h1>
        </div>
    </div>
    <table class="table table-hover">
        <tr>
            <th>Id</th>
            <th>Nome</th>
        </tr>
    @foreach($produtos as $item)
    <tr>
        <td>{{ $item->PRODUTO_ID }}</td>
        <td><a href="{{ route('lista.show', $item->PRODUTO_ID) }}">{{ $item->PRODUTO_NOME }}</a></td>
    </tr>
    @endforeach
</table>
</main>    
</body>
</html>