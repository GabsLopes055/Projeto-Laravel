@extends('template')
@include('admin.menuLateral.menuLateral')
@section('titulo', 'Lojas RA - Dashboard')
    <style>
        #cabecalho div.col-4 h1 {
            margin-top: 15px;
        }

        #cabecalho div.col-8 button {
            margin-top: 20px;
            width: 100px;
            float: right;
        }

        #vendas {
            border-left: 5px solid #dc3545;
        }

        #investimentos {
            border-left: 5px solid #17a2b8;
        }

        #produtos {
            border-left: 5px solid #28a745;
        }

        #elaborar {
            border-left: 5px solid #ffc107;
        }

    </style>
    <div class="container-fluid">
        <main role="main" class="main">
            <div class="row" id="cabecalho">
                <div class="col-4">
                    <h1>Dashboard</h1>
                </div>
                <div class="col-8">
                    <a href="{{ route('logout') }}"><button class="btn btn-danger ">Sair</button></a>
                </div>
            </div>
            <hr>


            <div class="row">
                <div class="col-sm-3">
                    <div class="card rounded" id="vendas">
                        <div class="card-body">
                            <h5 class="card-title">Vendas de Hoje</h5>
                            <h4 id="vendas_hoje"></h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card rounded" id="investimentos">
                        <div class="card-body">
                            <h5 class="card-title">Investimentos</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card rounded" id="produtos">
                        <div class="card-body">
                            <h5 class="card-title">Produtos</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card rounded" id="elaborar">
                        <div class="card-body">
                            <h5 class="card-title">Elaborar</h5>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
