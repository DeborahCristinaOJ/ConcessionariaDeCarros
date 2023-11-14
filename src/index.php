<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="../public/img/Logo/FavIcon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="../public/img/Logo/FavIcon.ico" type="image/x-icon">

    <title>Komainu | Página Inicial</title>

    <!--Links Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!--Links CSS-->
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="stylesheet" href="../public/css/index.css">

</head>

<body>

    <!--Barra de navegação-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="/ConcessionariaDeCarros-main/public/img/Logo/KomainuLogo.png" alt="Logo" width="80">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/ConcessionariaDeCarros-main/src/index.php">Página Inicial</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/ConcessionariaDeCarros-main/src/view/login_cadastro.php">Login | Cadastro</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/ConcessionariaDeCarros-main/src/view/perfilFuncionario.php">Área de funcionários</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/ConcessionariaDeCarros-main/src/view/perfilCarros.php">Carros à venda</a>
                    </li>
                </ul>
                <form class="form-inline btn-barra-pesquisa my-2 my-lg-0">
                    <input name="pesquisar" id="pesquisar" class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                    <button class="btn btn-outline-success btn-pesquisar my-2 my-sm-0" type="submit">Pesquisar</button>
                </form>
            </div>
        </div>
    </nav>


    <!--Banner Principal-->
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../public/img/BannerPrincipal/Banner1.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../public/img/BannerPrincipal/1.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../public/img/BannerPrincipal/2.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../public/img/BannerPrincipal/3.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../public/img/BannerPrincipal/4.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../public/img/BannerPrincipal/5.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../public/img/BannerPrincipal/6.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../public/img/BannerPrincipal/7.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../public/img/BannerPrincipal/8.png" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!--Apresentação-->
    <div class="apresentacao-textos">
        <h2 id="titulo">Bem-vindo à Komainu</h2>
        <h4 id="subtitulo">O santuário do poder e da sofisticação</h4>
        <p id="paragrafo"> Na Komainu, acreditamos que os carros não são apenas veículos, mas obras-primas da engenharia e do design.
            Nossa concessionária é um oásis onde a sofisticação, o desempenho e a beleza se unem para criar uma experiência automobilística inigualável.
            Explore nossa coleção exclusiva de carros de luxo que capturam a essência do prestígio automobilístico.
        </p>
    </div>

    <!--Sobre nós-->

    <div class="sobre-textos">
        <h3 id="titulo">Sobre nós</h3>
        <h4 id="subtitulo">Komainu: O Templo dos Carros de Luxo</h4>
        <p id="paragrafo">
            Na Komainu, nossa missão é criar um espaço onde a harmonia entre potência, proteção e sofisticação seja alcançada.

            Convidamos você a entrar em nosso santuário de carros luxuosos e explorar o poder e a elegância que a Komainu oferece a cada visitante.
            Inspirados pela mitologia do cão Komainu, um símbolo de proteção encontrado em muitos santuários e templos,
            criamos um espaço onde a sofisticação, a potência e a elegância se encontram.

            Acreditamos que a jornada de encontrar o carro perfeito é uma busca sagrada, e nosso compromisso é ajudá-lo nessa jornada,
            oferecendo uma seleção diversificada de veículos de alto padrão.

            Nossa missão é criar um espaço onde a harmonia entre potência, proteção e sofisticação seja alcançada.
            Convidamos você a entrar em nosso santuário de carros luxuosos e explorar o poder e a elegância que a Komainu oferece a cada visitante.
        </p>
    </div>

    <!--Carros em destaque-->
    <div class="Destaques-textos">
        <h3>Destaques</h3>
    </div>

    <div class="Destaques">

        <div class="portas">
            <div class="porta-esquerda">
                <img src="../public/img/DestaquesBanner/Portas/porta-Esquerda.png" alt="">
            </div>
            <div class="porta-direita">
                <img src="../public/img/DestaquesBanner/Portas/porta-Direita.png" alt="">
            </div>
        </div>

        <div id="carossel-carros-destaque" class="carousel slide" data-bs-ride="carousel">
            <div class="carrosel-carros">
                <div class="carousel-item active">
                    <div class="carro active">
                        <img src="../public/img/DestaquesBanner/Carros/Hino Contessa.png" alt="Carro 1">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carro">
                        <img src="../public/img/DestaquesBanner/Carros/Mitsubishi 3000GT (1990-2001).png" alt="Carro 2">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carro">
                        <img src="../public/img/DestaquesBanner/Carros/Toyota 2000GT (1967-1970).png" alt="Carro 3">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carro">
                        <img src="../public/img/DestaquesBanner/Carros/Toyota Century.png" alt="Carro 4">
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!--Depoimentos-->

    <div class="depoimentos">
        <h3>Depoimentos</h3>
        <div class="gallery">
            <img src="/ConcessionariaDeCarros-main/public/img/Depoimentos/depoimento1.png" alt="D1">
            <img src="/ConcessionariaDeCarros-main/public/img/Depoimentos/depoimento2.png" alt="D2">
            <img src="/ConcessionariaDeCarros-main/public/img/Depoimentos/depoimento3.png" alt="D3">
            <img src="/ConcessionariaDeCarros-main/public/img/Depoimentos/depoimento4.png" alt="D4">
        </div>
    </div>



    <!--Links Javascript-->
    <script src="../public/js/index.js"></script>
    </div>


    <!--Certificações/Parcerias-->



</body>

</html>