<?php
    require_once "../objetos/conexao_banco_de_dados.php";

    $conexao = conectar_banco_de_dados();

    if (!isset($_REQUEST["email-usuario"]) &&
        !isset($_REQUEST["senha-usuario"])) {
        return;
    }

    $email = $_REQUEST["email-usuario"];
    $senha = $_REQUEST["senha-usuario"];

    $senha_criptografada = md5($senha);

    echo $senha, " - ", $senha_criptografada;

    $sql = "SELECT id, nome FROM usuario
                WHERE email = '$email'
                AND senha = '$senha_criptografada'";

    $resultado = $conexao->query($sql);

    if ($resultado->num_rows > 0) {
        header("location: ../");
    } else {
        echo '<div class="alert alert-danger" role="alert">
                Usuário e/ou senha inválidos
            </div>';
    }
?>