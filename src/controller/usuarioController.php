<?php

include('../config/config.php');
include('../dao/usuarioDao.php');
include('../model/usuario.php');

$erro = "Erro!";

if (isset($_POST['_action']) == "realizarLogin") {

    $email = $_POST["emailLogin"];
    $senha = $_POST["senhaLogin"];
    
    $u = new Usuario();

    $u->setEmail($email);
    $u->setSenha($senha);
    
    $uDAO = new UsuarioDAO();

    $status = $uDAO->realizarLogin($u);

    if ($status) {

        echo (int) $status . ",¿" . trim("../index.php");
        exit;
    } else {
        echo (int) $status . ",¿" . trim("../index.php");
        exit;
    }
}

if (($_POST['_action']) == "cadastrarUsuario") {

    echo 'Chegou aqui';

        $email = $_POST["emailCadastro"];
        $senha = $_POST["senhaCadastro"];

        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        $senha = htmlspecialchars($senha, ENT_QUOTES);

        $u = new Usuario();

        $u->setEmail($email);
        $u->setSenha($senha);


        $uDAO = new UsuarioDAO();
        $status = $uDAO->cadastrarUsuario($u);

        

        if ($status) {
            $msg = "Novo usuário cadastrado com sucesso!";
            
            echo (int) $status . ",¿" . $msg;
            exit;
        } else {
            echo (int) $status . ".¿" . $erro;
            exit;
        }
    }
