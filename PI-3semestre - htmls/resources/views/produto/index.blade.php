@foreach($produtos as $item)
 
<a href="#">{{$item->PRODUTO_NOME}} {{$item->Categoria->CATEGORIA_NOME}} {{$item->Produto_imagem}}</a>
<br>
 
@endforeach