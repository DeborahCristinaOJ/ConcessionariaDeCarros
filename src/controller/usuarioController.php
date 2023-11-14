<?php

//include('../config/config.php');
include('../dao/usuarioDao.php');
include('../model/usuario.php');

if ($_POST['_action'] == "realizarLogin") {

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
