@foreach($produtos as $item)
 
<a href="#">{{$item->PRODUTO_NOME}} {{$item->PRODUTO_PRECO}} {{$item->Categoria->CATEGORIA_NOME}}</a>
<br>

@foreach($item->Produto_imagem as $imagem)
<img src=" {{$imagem->IMAGEM_URL}} ">

<p> Estoque:{{ $item->Produto_estoque->PRODUTO_QTD }} </p>
 
@endforeach
@endforeach