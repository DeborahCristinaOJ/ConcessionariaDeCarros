<?php

include('../config/config.php');

class CarroDAO
{
    public function cadastrarCarro(Carro $c): bool
    {

  
        $marca = $c ->getMarca();
        $modelo = $c ->getModelo();
        $dataFabricacao = $c ->getDataFabricacao();
        $quilometragem = $c ->getQuilometragem();
        $combustivel = $c ->getCombustivel();
        $cor = $c ->getCor();
        $placa = $c ->getPlaca();
        $descricao = $c ->getDescricao();
        $preco = $c ->getPreco();

        $status = false;

        $sql = "INSERT INTO CARRO (ano_fabircacao, quilometragem, combustivel, cor, placa, descricao, preco, modelo, marca) VALUES ('".$dataFabricacao."','".$quilometragem."', '".$combustivel."','".$cor."','".$placa."','".$descricao."','".$preco."','".$modelo."','".$marca."')";

        $DBConnection = new Config();

        $conn = $DBConnection->getConn();

        $result = $conn->query($sql);

echo $result;

        if ($result) {

            $status = true;
        }

        $DBConnection->fecharConn($conn);

        return $status;
    }
}
