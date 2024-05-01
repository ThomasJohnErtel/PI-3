@foreach($produtos as $item)
 
<a href="#">{{$item->PRODUTO_NOME}} {{$item->Categoria->CATEGORIA_NOME}}</a>
<br>
 
@endforeach



OBS: ISSO É UM COMENTÁRIO, PARA O PI, TROCAR CATEGORIA POR IMAGEM, USANDO A MESMA LÓGICA PEGANDO O NOME DAS IMAGENS NO BANCO DE DADOS NO DISCORD