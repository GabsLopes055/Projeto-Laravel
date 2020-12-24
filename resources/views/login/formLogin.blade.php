@extends('template')
@section('titulo', 'Lojas RA - Login')
    

@section('login')

    <div class="container border-bottom border-right rounded">
        <div class="row">
            <div class="col-6 coluna1">
                <figure class="figure">
                    <img src="logo.svg" class="figure-img img-fluid" alt="Login">
                </figure>
            </div>
            <div class="col-6">
                <form class="form-group" method="post" action="{{ route('AutenticarUsuario') }}">
                    <h2>Lojas R&A Nacionais e Importados</h2>
                    @if ($errors ?? ('')->all())
                        @foreach ($errors->all() as $erro)
                            <div class="alert alert-danger" role="alert">
                                {{ $erro }}
                            </div>
                        @endforeach
                    @endif
                    <div class="form-group">
                        <h3>Usuário</h3>
                        @csrf
                        <input class="form-control rounded" type="email" name="email" value="gabriel.teixeira@ra.com.br"
                            id="email" placeholder="Informe seu usuário">
                        <h3>Senha</h3>
                        <input class="form-control rounded" type="password" name="password" id="password"
                            placeholder="Informe sua senha">
                        <input type="checkbox">
                        <label class="form-check-label">Lembrar meu login</label>
                        <button class="btn btn-danger" type="submit"><strong>Acessar</strong></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@show
