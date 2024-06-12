<?php
// CarrinhoController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class CarrinhoController extends Controller
{
    public function index()
    {
        $produtos = Produto::take(8)->get();
        return view('carrinho.index', compact('produtos'));
    }

    public function show(Produto $produto)
    {
        return view('lista.show', compact('produto'));
    }

    public function adicionar(Request $request)
    {
        $produtoId = $request->input('produto_id');
        $produto = Produto::find($produtoId);

        if (!$produto) {
            return redirect()->back()->with('error', 'Produto não encontrado.');
        }

        $carrinho = session()->get('carrinho', []);

        if (isset($carrinho[$produtoId])) {
            $carrinho[$produtoId]['quantidade']++;
        } else {
            $carrinho[$produtoId] = [
                'produto' => $produto,
                'quantidade' => 1,
            ];
        }



        session()->put('carrinho', $carrinho);

        return redirect()->back()->with('success', 'Produto adicionado ao carrinho com sucesso!');
    }

    public function mostrar()
    {
        $carrinho = session()->get('carrinho', []);
        return view('carrinho.mostrar', compact('carrinho'));
    }

    public function remover(Request $request)
    {
        $produtoId = $request->input('produto_id');
        $carrinho = session()->get('carrinho', []);

        if (isset($carrinho[$produtoId])) {
            unset($carrinho[$produtoId]);
            session()->put('carrinho', $carrinho);
        }

        return redirect()->back()->with('success', 'Produto removido do carrinho com sucesso!');
    }
}
