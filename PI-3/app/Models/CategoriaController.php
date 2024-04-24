<?php
 
namespace App\Models;
 
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categoria;
use Illuminate\Http\Controllers;
 
class CategoriaController extends Controller
{
function index(){
    return view('categoria.index')->with('categoria', Categoria::all());
 
}
   
}