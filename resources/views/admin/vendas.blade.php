@extends('template')
@include('admin.menuLateral.menuLateral')
@section('titulo', 'Lojas RA - Vendas')
    <style>
        .main h1 {
            margin-top: 10px;
        }

        .btn {
            width: 100%
        }

    </style>
    <div class="container-fluid">
        <main role="main" class="main">
            <h1>Vendas</h1>
            <hr class="my-4">
            <form action="{{route('cadastrarVendas')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-3">
                        <input class="form-control" type="text" name="nomeProduto" id="" placeholder="Nome do Produto">
                    </div>
                    <div class="col-3">
                        <input class="form-control" type="text" name="valorProduto" id="" placeholder="Valor do Produto">
                    </div>
                    <div class="col-3">
                        <input class="form-control" type="text" name="precoCusto" id="" placeholder="Preço de Custo">
                    </div>
                    <div class="col-3">
                        <button class="btn btn-dark" type="submit">Cadastrar</button>
                    </div>
                </div>
            </form>
            


            <table class="table table-striped">
                <thead class="">
                    <tr>
                        <th>Nome do Produto</th>
                        <th>Valor do Produto</th>
                        <th>Custo</th>
                        <th>Editar</th>
                    </tr>
                </thead>

            </table>


        </main>
    </div>
