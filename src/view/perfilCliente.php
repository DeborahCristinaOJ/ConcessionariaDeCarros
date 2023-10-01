<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="../public/img/Logo/FavIcon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="../public/img/Logo/FavIcon.ico" type="image/x-icon">

    <title>Komainu | Cliente</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/public/css/style.css">
    <link rel="stylesheet" href="/public/css/perfilCliente.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>

<!--Barra de navegação-->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="../public/img/Logo/KomainuLogo.png" alt="Logo" width="80">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="../src/index.php">Página Inicial</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../src/view/login.php">Faça Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../src/view/perfilFuncionario.php">Área de funcionários</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../src/view/perfilCarros.php">Carros à venda</a>
                    </li>
                </ul>

                <form class="form-inline btn-barra-pesquisa my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                    <button class="btn btn-outline-success btn-pesquisar my-2 my-sm-0" type="submit">Pesquisar</button>
                </form>
            </div>
        </div>
    </nav>


<div id="perfil-cliente">
        <h1>Perfil Cliente</h1>
        <h2>Pesquisa de Veículo</h2>
        <form action="pesquisar_veiculo.php" method="post">
            <select name="filtro_marca">
                <option value="">Filtrar por Marca</option>
                <option value="marca1">Marca 1</option>
                <option value="marca2">Marca 2</option>
                <!-- Adicione mais opções de marca aqui -->
            </select>
            <select name="filtro_modelo">
                <option value="">Filtrar por Modelo</option>
                <option value="modelo1">Modelo 1</option>
                <option value="modelo2">Modelo 2</option>
                <!-- Adicione mais opções de modelo aqui -->
            </select>
            <input type="number" name="filtro_ano_min" placeholder="Ano Mínimo">
            <input type="number" name="filtro_ano_max" placeholder="Ano Máximo">
            <input type="number" name="filtro_preco_max" placeholder="Preço Máximo">
            <button type="submit">Pesquisar</button>
        </form>

        <!-- Listar Resultados -->
        <div id="resultados">
            <!-- Os resultados da pesquisa serão exibidos aqui -->
        </div>
    </div>

</body>
</html>