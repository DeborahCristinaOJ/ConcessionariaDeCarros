<?php


class Carro{

private int $id;
private string $marca;
private string $modelo;
private int $dataFabricacao;
private int $quilometragem;
private string $combustivel;
private string $cor;
private string $placa;
private string $descricao;
private int $preco;


public function Carro(){}

public function setId(int $id): void
{
    $this->id = $id;
}

public function getId(): int
{
    return $this->id;
}

public function setMarca(string $marca): void
{
    $this->marca = $marca;
}

public function getMarca(): string
{
    return $this->marca;
}
public function setModelo(string $modelo): void
{
    $this->modelo = $modelo;
}

public function getModelo(): string
{
    return $this->modelo;
}
public function setDataFabricacao(int $dataFabricacao): void
{
    $this->dataFabricacao = $dataFabricacao;
}

public function getDataFabricacao(): int
{
    return $this->dataFabricacao;
}
public function setQuilometragem(int $quilometragem): void
{
    $this->quilometragem = $quilometragem;
}

public function getQuilometragem(): int
{
    return $this->quilometragem;
}
public function setCombustivel(string $combustivel): void
{
    $this->combustivel = $combustivel;
}

public function getCombustivel(): string
{
    return $this->combustivel;
}
public function setCor(string $cor): void
{
    $this->cor = $cor;
}

public function getCor(): string
{
    return $this->cor;
}
public function setPlaca(string $placa): void
{
    $this->placa = $placa;
}

public function getPlaca(): string
{
    return $this->placa;
}
public function setPreco(int $preco): void
{
    $this->preco = $preco;
}

public function getPreco(): int
{
    return $this->preco;
}
public function setDescricao(string $descricao): void
{
    $this->descricao = $descricao;
}

public function getDescricao(): string
{
    return $this->descricao;
}

}


?>