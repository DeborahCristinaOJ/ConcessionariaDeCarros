<?php

include('../config/config.php');


class UsuarioDAO
{

    public function realizarLogin(usuario $u): bool
    {
        

        $email = $u->getEmail();
        $senha = $u->getSenha();

        $status = false;


        $sql = "SELECT * FROM USUARIO WHERE EMAIL = '$email' AND SENHA = '$senha'";

        $DBConnection = new config();

        $conn = $DBConnection->getConn();

        $result = $conn->query($sql);

        if ($result->num_rows == 1) {

            $status = true;
        }

        $DBConnection->fecharConn($conn);

        return $status;
    }

    public function cadastrarUsuario(usuario $u): bool
    {

        $email = $u->getEmail();
        $senha = $u->getSenha();

        $status = false;

        $sql = "INSERT INTO USUARIO (email, senha) VALUES ('" . $email . "', '" . $senha . "')";

        $DBConnection = new Config();

        $conn = $DBConnection->getConn();

        $result = $conn->query($sql);

        if ($result) {

            $status = true;
        }

        $DBConnection->fecharConn($conn);

        return $status;
    }
}
