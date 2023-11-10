 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <link rel="icon" href="/ConcessionariaDeCarros-main/public/img/Logo/FavIcon.ico" type="image/x-icon">
     <link rel="shortcut icon" href="/ConcessionariaDeCarros-main/public/img/Logo/FavIcon.ico" type="image/x-icon">

     <title>Komainu | Carros</title>
     <!--Links Bootstrap-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
     <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
     <!--Links CSS-->
     <link rel="stylesheet" href="/ConcessionariaDeCarros-main/public/css/style.css?=1234" type="text/css" media="screen">
     <link rel="stylesheet" href="/ConcessionariaDeCarros-main/public/css/perfilCarros.css?=1234" type="text/css" media="screen">


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
                     <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                     <button class="btn btn-outline-success btn-pesquisar my-2 my-sm-0" type="submit">Pesquisar</button>
                 </form>
             </div>
         </div>
     </nav>

     <div class="card">
         <div class="CarrosForm">
             <h2>Listagem em Estoque</h2>
             <form action="filtrar_veiculos.php" method="post">
                 <select name="filtro_marca">
                     <option value="">Filtrar por Marca</option>
                     <option value="filtro_marca">Marca 1</option>
                     <option value="filtro_marca">Marca 2</option>

                 </select>
                 <select name="filtro_modelo">
                     <option value="">Filtrar por Modelo</option>
                     <option value="filtro_modelo">Modelo 1</option>
                     <option value="filtro_modelo">Modelo 2</option>

                 </select>
                 <input type="number" name="filtro_ano_min" placeholder="Ano Mínimo">
                 <input type="number" name="filtro_ano_max" placeholder="Ano Máximo">
                 <input type="number" name="filtro_preco_max" placeholder="Preço Máximo">
                 <button type="submit">Filtrar</button>
             </form>


             <button onclick="listarTodosVeiculos()">Listar Todos</button>
         </div>
     </div>

     <div class="card">
         <div class="car-container">
             <img src="/ConcessionariaDeCarros-main/public/img/Carros/1999 Mitsubishi Eclipse GSX.png" alt="Car" class="car-image" onmouseover="showCarInfo()">
             <div class="car-info" id="carInfo">
                 <h2>1999 Mitsubishi Eclipse GSX</h2>
                 <h6>Ano: 1995</h6>
                 <h6>Cor: Vermelho</h6>
                 <h6>Preço: R$ 69.264</h6>
                 <a href="#" class="buy-button">Comprar</a>
             </div>
             <p>O esportivo Mitsubishi Eclipse foi fabricado pela Mitsubishi, Plymouth e a Chrysler, que desenvolveram em conjunto. Para esse efeito, em 1985 a empresa Diamond Star Motors foi fundada.

                 De acordo com a Mitsubishi Motors, o Eclipse foi batizado em homenagem a um cavalo de corrida inglês do século XVIII que havia vencido 26 corridas.

                 O Eclipse foi vendido oficialmente no Japão, América do Norte, Oriente Médio, Coreia do Sul, Filipinas, Brasil e China. No final de agosto de 2011, o Eclipse final saiu da linha de montagem e foi leiloado, com os rendimentos doados para instituições de caridade.

             </p>
         </div>
         <div class="gallery">
             <img src="/ConcessionariaDeCarros-main/public/img/Carros/Carro1.2.png" alt="Car 1">
             <img src="/ConcessionariaDeCarros-main/public/img/Carros/Carro1.3.png" alt="Car 2">
             <img src="/ConcessionariaDeCarros-main/public/img/Carros/Carro1.png" alt="Car 3">
         </div>

     </div>

     <div class="card">
         <div class="car-container">
             <img src="/ConcessionariaDeCarros-main/public/img/Carros/Lexus LFA.png" alt="Car" class="car-image" onmouseover="showCarInfo()">
             <div class="car-info" id="carInfo">
                 <h2>Lexus LFA</h2>
                 <h6>Ano: 2010</h6>
                 <h6>Cor: Branco</h6>
                 <h6>Preço: R$ 2.828.532,85</h6>
                 <a href="#" class="buy-button">Comprar</a>
             </div>
             <p>O Lexus LFA é a versão definitiva do protótipo do super desportivo Lexus LF-A. Tem um motor 4.8 V10 com 560cv e que atinge as 9900 RPM. A velocidade máxima é de 325 km/h. Custa cerca de 450.000€. Existem apenas 300 em todo o mundo.</p>
         </div>
         <div class="gallery">
             <img src="/ConcessionariaDeCarros-main/public/img/Carros/Carro3.2.png" alt="Car 1">
             <img src="/ConcessionariaDeCarros-main/public/img/Carros/Carro3.png" alt="Car 2">
             <img src="/ConcessionariaDeCarros-main/public/img/Carros/Carro3.3.png" alt="Car 3">
         </div>

     </div>

     <div class="card">
         <div class="car-container">
             <img src="/ConcessionariaDeCarros-main/public/img/Carros/Honda S800.png" alt="Car" class="car-image" onmouseover="showCarInfo()">
             <div class="car-info" id="carInfo">
                 <h2>Honda S800</h2>
                 <h6>Ano: 1968</h6>
                 <h6>Cor: Branco e amarelo</h6>
                 <h6>Preço: R$ 115.751,78</h6>
                 <a href="#" class="buy-button">Comprar</a>
             </div>
             <p>O S800 é um carro esportivo da Honda . Apresentado no Salão Automóvel de Tóquio de 1965 , o S800 substituiu o bem-sucedido Honda S600 como carro-imagem da empresa. Com um limite máximo de 9.500 rpm, é um dos carros esportivos de maior rotação produzidos para uso nas ruas. O S800 competiu com o Austin-Healey Sprite , MG Midget , Triumph Spitfire , Datsun Fairlady e Fiat 850 Spider .</p>
         </div>
         <div class="gallery">
             <img src="/ConcessionariaDeCarros-main/public/img/Carros/Carro2.png" alt="Car 1">
             <img src="/ConcessionariaDeCarros-main/public/img/Carros/Carro2.4.png" alt="Car 2">
             <img src="/ConcessionariaDeCarros-main/public/img/Carros/Carro2.5.png" alt="Car 3">
         </div>

     </div>

     <script src="/ConcessionariaDeCarros-main/public/js/perfilCarros.js"></script>

 </body>

 </html>