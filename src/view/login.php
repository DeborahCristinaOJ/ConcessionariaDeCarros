<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="/Concession%C3%A1riaDeCarros/public/img/Logo/FavIcon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="/Concession%C3%A1riaDeCarros/public/img/Logo/FavIcon.ico" type="image/x-icon">

    <title>Komainu | Faça Login ou Cadastre-se</title>

    <!--Links Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!--Links CSS-->
    <link rel="stylesheet" href="/Concession%C3%A1riaDeCarros/public/css/style.css" type="text/css" media="screen">

</head>
<body>


    <!--Barra de navegação-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="/Concession%C3%A1riaDeCarros/public/img/Logo/KomainuLogo.png" alt="Logo" width="80">
            </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/Concession%C3%A1riaDeCarros/src/index.php">Página Inicial</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/Concession%C3%A1riaDeCarros/src/view/login.php">Login / Cadastre-se</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/Concession%C3%A1riaDeCarros/src/view/perfilFuncionario.php">Área de funcionários</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/Concession%C3%A1riaDeCarros/src/view/perfilCarros.php">Carros à venda</a>
            </li>
        </ul>
        <form class="form-inline btn-barra-pesquisa my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
            <button class="btn btn-outline-success btn-pesquisar my-2 my-sm-0" type="submit">Pesquisar</button>
        </form>
    </div>
    </div>
    </nav>


    <!--Login e Cadastro-->
    <div class="container-principal_loginCadastro  p-4">
        <div class="row main mt-5">
            <div class="col-md-6 p-5 " id="Cadastrar">
                <h1 class="display-4 text-center ">Cadastre-se</h1>
                <form class="d-flex justify-content-center mt-4">
                    <div class="w-75 ">
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email">
                        </div>
                        <div class="form-group my-4">
                            <label for="">Senha</label>
                            <input type="password">
                        </div>
                        <button type="submit">Cadastrar</button>
                        <div class="d-flex justify-content-between mt-5">
                            <a class="links" href="#" id="loginLink">Já tem uma conta?</a>
                        </div>
                    </div>
                </form>
            </div>
            
            <div class="col-md-6 p-5 " id="login">
                <h1 class="display-4 text-center ">Faça Login</h1>
                <form class="d-flex justify-content-center mt-4">
                    <div class="w-75 ">
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email">
                        </div>
                        <div class="form-group my-4">
                            <label for="">Senha</label>
                            <input type="password">
                        </div>
                        <button type="submit">Login</button>
                        <div class="d-flex justify-content-between mt-5">
                            <a class="links" href="#" id="registrarLink">Criar uma conta?</a>
                            <a class="links" href="#" >Esqueceu a senha?</a>
                        </div>
                    </div>
                </form>
            </div>
            <div  id="overlay">

            </div>
        </div>

    </div>


    <!--Links Javascript-->
    <script src="/Concession%C3%A1riaDeCarros/public/js/login.js"></script>

</body>

</body>
</html>