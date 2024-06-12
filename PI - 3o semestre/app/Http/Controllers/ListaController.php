<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ListaController extends Controller
{
    public function index()
    {
        $produtos = Produto::all();
        return view('lista.index', compact('produtos'));
    }

    public function show(Produto $produto)
    {
        return view('lista.show', compact('produto'));
    }
}
