<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="/Concession%C3%A1riaDeCarros/public/img/Logo/FavIcon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="/Concession%C3%A1riaDeCarros/public/img/Logo/FavIcon.ico" type="image/x-icon">

    <title>Komainu | Funcionários</title>

    <!--Links Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!--Links CSS-->
    <link rel="stylesheet" href="/Concession%C3%A1riaDeCarros/public/css/perfilFuncionario.css" type="text/css" media="screen">


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
                        <a class="nav-link" href="/Concession%C3%A1riaDeCarros/src/view/login_cadastro.php">Faça Login</a>
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

    <!--Mascote interativo-->
    <div class="mascote-container">
        <img src="/Concession%C3%A1riaDeCarros/public/img/Logo/FavIcon.png" alt="Mascote" id="mascote" class="mascote">
        <div class="fala" id="fala">
            <div class="texto-fixo">
                <b>
                    <p>Bem-vindo à área de funcionários.</p>
                </b>
                <p>Obrigado por trabalhar conosco!</p>
            </div>
        </div>
    </div>

    <!--Links Javascript-->
    <script src="/Concession%C3%A1riaDeCarros/public/js/perfilFuncionario.js"></script>

    <div id="perfil-funcionario" class="perfil-funcionario">
        <h1>Perfil Funcionário</h1>
        <h2>Cadastro de Veículo</h2>
        <form action="cadastrar_veiculo.php" method="post">
            <select name="marca">
                <option value="marca">Marca 1</option>
                <option value="marca">Marca 2</option>
            </select><br>
            <select name="modelo">
                <option value="modelo">Modelo 1</option>
                <option value="modelo">Modelo 2</option>
            </select><br>
            <input type="number" name="ano_fabricacao" placeholder="Ano de Fabricação" required><br>
            <input type="text" name="quilometragem" placeholder="Quilometragem" required><br>
            <input type="text" name="combustivel" placeholder="Combustível" required><br>
            <input type="text" name="cor" placeholder="Cor" required><br>
            <input type="text" name="placa" placeholder="Placa" required><br>
            <textarea name="descricao" placeholder="Descrição/Acessórios"></textarea><br>
            <input type="number" name="preco" placeholder="Preço" required><br>
            <input type="text" name="telefone_contato" placeholder="Telefone para Contato" required><br>
            <button type="submit">Cadastrar Veículo</button>
        </form>

    </div>
</body>

</html>