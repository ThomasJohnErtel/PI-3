<?php
 
namespace App\Http\Controllers;
use App\Models\Produto;
use Illuminate\Http\Request;
 
class ProdutoController extends Controller
{
   function index(){
    return view('produto.index')->with('produtos', Produto::all());
}
}