<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('site/bootstrap.css') }}">

    <link rel=" stylesheet" href="css/styleLogin.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>Loja</title>
</head>

<body>

    <div class="container border-bottom border-right rounded">
        <div class="row">
            <div class="col-6 coluna1">
                <figure class="figure">
                    <img src="logo.svg" class="figure-img img-fluid" alt="Login">
                </figure>
            </div>
            <div class="col-6">
                <form action="index.html" class="form-group">
                    <h1>Lojas R&A Nacionais e Importados</h1>
                    <div class="form-group">
                        <h3>Usuário</h3>
                        <input class="form-control rounded" type="email" name="email" id="email"
                            placeholder="Informe seu usuário">
                        <h3>Senha</h3>
                        <input class="form-control rounded" type="password" name="senha" id="senha"
                            placeholder="Informe sua senha">
                        <input type="checkbox">
                        <label class="form-check-label">Lembrar meu login</label>
                        <button class="btn btn-danger" type="submit"><strong>Acessar</strong></button>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <script src="{{ asset('site/jquery.js') }}"></script>
    <script src="{{ asset('site/bootstrap.js') }}"></script>
</body>

</html>
