<?php
include('/ConcessionariaDeCarros-main/src/config/config.php');
include('/ConcessionariaDeCarros-main/src/dao/usuarioDao.php');
include('/ConcessionariaDeCarros-main/src/model/usuario.php');

if (isset($_POST['_action']) && $_POST['_action'] == "cadastrarUsuario") {

    if (isset($_POST["emailCadastro"], $_POST["senhaCadastro"])) {

        $email = $_POST["emailCadastro"];
        $senha = $_POST["senhaCadastro"];

        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        $senha = htmlspecialchars($senha, ENT_QUOTES);

        $u = new Usuario();
        $email = mysqli_real_escape_string($conn, $u->getEmail());
        $senha = mysqli_real_escape_string($conn, $u->getSenha());


        $uDAO = new UsuarioDAO();
        $status = $uDAO->cadastrarUsuario($u);

        if ($status) {
            $msg = "Novo usuário cadastrado com sucesso!";
            $erro = "Erro!";
            echo (int) $status . ",¿" . $msg;
            exit;
        } else {
            echo (int) $status . ".¿" . $erro;
            exit;
        }
    }
}
