<?php 

include('../config/config.php');

    class UsuarioDAO{

        public function realizarLogin(usuario $u) : bool{

            $email = $u -> getEmail();
            $senha = $u -> getSenha();

            $status = false;

            $sql = "SELECT * FROM usuario WHERE EMAIL = '$email' AND SENHA = '$senha'";

            $DBConnection = new config();

            $conn = $DBConnection -> getConn();

            $result = $conn -> query($sql);

            if ($result -> num_rows == 1){
                
                header("location: index.php");            
                $status = true;

            }

            $DBConnection -> fecharConn($conn);

            return $status;
        }

        public function cadastrarUsuario (usuario $u) : bool{

            $email = $u -> getEmail();
            $senha = $u -> getSenha();

            $status = false;

            $sql = "INSERT INTO usuario (email, senha) VALUES ('".$email."', '".$senha."') LIMIT 1";

            $DBConnection = new config();

            $conn = $DBConnection->getConn();

            $result = $conn->query($sql);

            if ($result){

                $status = true;
            }

            $DBConnection -> fecharConn($conn);

            return $status;

        }


    }


?>