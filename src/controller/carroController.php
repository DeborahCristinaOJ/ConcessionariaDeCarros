<?php

include('../dao/carroDAO.php');
include('../model/Carro.php');

if (isset($_POST['_action']) == "cadastrarCarro") {

    $marca = $_POST["marca"];
    $modelo = $_POST["modelo"];
    $dataFabricacao = $_POST["ano_fabricacao"];
    $quilometragem = $_POST["quilometragem"];
    $combustivel = $_POST["combustivel"];
    $cor = $_POST["cor"];
    $placa = $_POST["placa"];
    $descricao = $_POST["descricao"];
    $preco = $_POST["preco"];


    $c = new Carro();

    $c -> setMarca($marca);
    $c -> setModelo($modelo);
    $c -> setDataFabricacao($dataFabricacao);
    $c -> setQuilometragem($quilometragem);
    $c -> setCombustivel($combustivel);
    $c -> setCor($cor);
    $c -> setPlaca($placa);
    $c -> setDescricao($descricao);
    $c -> setPreco($preco);




    $cDAO = new CarroDAO();
    $status = $cDAO->cadastrarCarro($c);

    

    if ($status) {
        $msg = "Novo Carro cadastrado com sucesso!";
        
        echo (int) $status . ",¿" . $msg;
        exit;
    } else {
        echo (int) $status . ".¿" . $erro;
        exit;
    }
}
