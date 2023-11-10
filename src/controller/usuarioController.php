<?php

include('/ConcessionariaDeCarros-main/src/config/config.php');
include('/ConcessionariaDeCarros-main/src/dao/usuarioDao.php');
include('/ConcessionariaDeCarros-main/src/model/usuario.php');

if ($_POST['_action'] == "realizarLogin") {

    $email = $_POST["emailLogin"];
    $senha = $_POST["senhaLogin"];

    $u = new Usuario();

    $email = mysqli_real_escape_string($conn, $u->getEmail());
    $senha = mysqli_real_escape_string($conn, $u->getSenha());

    $uDAO = new UsuarioDAO();

    $status = $uDAO->realizarLogin($u);

    if ($status) {

        echo (int) $status . ",¿" . trim("/ConcessionariaDeCarros-main/src/index.php");
        exit;
    } else {
        echo (int) $status . ",¿" . trim("/ConcessionariaDeCarros-main/src/index.php");
        exit;
    }
}
