<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\venda;

class ControllerVendas extends Controller
{
    public function index() {
        return view('admin.vendas');
    }

    public function cadastrarVendas(Request $request) {

        $dados = new venda();

        var_dump($dados->teste());

        dd($request->all());
    }
}
