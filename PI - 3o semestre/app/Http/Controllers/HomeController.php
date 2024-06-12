<?php

namespace App\Http\Controllers;
use App\Models\Home;
use Illuminate\Http\Request;
use App\Models\Produto;

class HomeController extends Controller
{
    function index(){
      
        $produtos = Produto::all();

        // Retorna a view com os produtos
        return view('home.index', compact('produtos'));
        
    }
    
}

