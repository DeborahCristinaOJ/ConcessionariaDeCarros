<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="../../public/img/Logo/FavIcon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="../../public/img/Logo/FavIcon.ico" type="image/x-icon">

    <title>Komainu | Funcionários</title>

    <!--Links Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!--Links CSS-->
    <link rel="stylesheet" href="../../public/css/perfilFuncionario.css" type="text/css" media="screen">
    <link rel="stylesheet" href="../../public/css/style.css" type="text/css" media="screen">

    <!--Links Javascript-->
    <script src="../../public/js/perfilFuncionario.js"></script>

</head>

<body>



    <!--Barra de navegação-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="../../public/img/Logo/KomainuLogo.png" alt="Logo" width="80">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="../index.php">Página Inicial</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../view/login_cadastro.php">Login | Cadastro</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../view/perfilFuncionario.php">Área de funcionários</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../view/perfilCarros.php">Carros à venda</a>
                    </li>
                </ul>
                <form class="form-inline btn-barra-pesquisa my-2 my-lg-0">
                    <input name="pesquisar" id="pesquisar" class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                    <button class="btn btn-outline-success btn-pesquisar my-2 my-sm-0" type="submit">Pesquisar</button>
                </form>
            </div>
        </div>
    </nav>

    <!--Mascote interativo-->
    <div class="mascote-container">
        <img src="../../public/img/Logo/FavIcon.png" alt="Mascote" id="mascote" class="mascote">
        <div class="fala" id="fala">
            <div class="texto-fixo">
                <b>
                    <p>Bem-vindo à área de funcionários.</p>
                </b>
                <p>Obrigado por trabalhar conosco!</p>
            </div>
        </div>
    </div>



    <div id="perfil-veiculo" class="perfil-veiculo">
        <h1>Perfil Veículo</h1>
        <h2>Cadastro de Veículo</h2>
        <form id="frmVeiculo" method="post">
            <select class="veiculoFrm" name="marca">
                <option value="Toyota">Toyota</option>
                <option value="Honda">Honda</option>
                <option value="Nissan">Nissan</option>
                <option value="Subaru">Subaru</option>
                <option value="Mazda">Mazda</option>
                <option value="Mitsubishi">Mitsubishi</option>
                <option value="Suzuki">Suzuki</option>
                <option value="Lexus">Lexus</option>
                <option value="Acura">Acura</option>
                <option value="Infiniti">Infiniti</option>
            </select><br>
            <textarea name="modelo" placeholder="Modelo"></textarea><br>
            <input type="number" name="ano_fabricacao" placeholder="Ano de Fabricação" required><br>
            <input type="text" name="quilometragem" placeholder="Quilometragem" required><br>
            <input type="text" name="combustivel" placeholder="Combustível" required><br>
            <input type="text" name="cor" placeholder="Cor" required><br>
            <input type="text" name="placa" placeholder="Placa" required><br>
            <textarea name="descricao" placeholder="Descrição"></textarea><br>
            <input type="number" name="preco" placeholder="Preço" required><br>

            <button type="submit">Cadastrar Veículo</button>
        </form>
    </div>




</body>

</html>