<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Produto</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"> 
</head>
<body>
    <main class="container mt-4">
        <div class="row">
            <h1>{{ $produto->PRODUTO_NOME }}</h1>
        </div>
        <div class="row">
            <h2>Categoria: {{ $produto->categoria->CATEGORIA_NOME }}</h2>
        </div>
        <div class="row">
            <h2>Preço: {{ $produto->PRODUTO_PRECO }}</h2>
        </div>
        <div class="row">
            <p>Descrição: {{ $produto->PRODUTO_DESC }}</p>
        </div>
        <div class="row">
            <h2>Estoque:</h2>
                <p>Quantidade: {{ $produto->Produto_estoque->PRODUTO_QTD }}</p>
        </div>
        <div class="row">
            <h2>Imagens:</h2>
            @foreach($produto->produto_imagem as $imagem)
                <img src="{{ $imagem->IMAGEM_URL }}" alt="Imagem do Produto">
            @endforeach
        </div>
    </main>    
</body>
</html>
        </div>
    </main>    
</body>
</html>
