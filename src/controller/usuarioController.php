<?php

include('../dao/usuarioDao.php');
include('../model/usuario.php');

if ($_POST['_action'] == "realizarLogin") {

    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $u = new Usuario();

    $u->setEmail($email);
    $u->setSenha($senha);

    $uDAO = new UsuarioDAO();

    $status = $uDAO->realizarLogin($u);

    if ($status) {

        echo (int) $status . ",¿" . trim("../view/index.php");
        exit;
    } else {
        echo (int) $status . ",¿" . trim("../view/login.php");
        exit;
    }
}

if ($_POST['_action'] == "cadastrarUsuario") {

    
    $id = $_POST["id"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $u = new Usuario();

    $u->setEmail($email);
    $u->setSenha($senha);

    $uDAO = new usuarioDAO();

    $status = $uDAO->cadastrarUsuario($u);

    if ($status) {

        $msg = "Novo usuário cadastrado com sucesso!";

        echo (int) $status . ",¿" . $msg;
        exit;
    } else {

        echo (int) $status . ".¿" . null;
        exit;
    }
}
