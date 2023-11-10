<?php

class Config
{


    public $host = "localhost";
    public $username = "root";
    public $password = "admin";
    public $database = "concessionaria";

    private $conn;

    public function __construct()
    {

        if (!isset($this->conn)) {

            $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database) or die("Falha na Conexão: %s\n" . $this->conn->error);

            if (!$this->conn) {
                echo ('Não foi possível conectar ao servidor de Banco de dados. Vaerifique os dados de sua conexão e tente novamente.');
                exit;
            }
        }
    }

    public function getConn()
    {
        return $this->conn;
    }

    public function fecharConn($conn)
    {
        $conn->close();
    }
}
