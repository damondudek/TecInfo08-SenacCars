<?php
    require_once "../objetos/conexao_banco_de_dados.php";

    $conexao = conectar_banco_de_dados();

    if (!isset($_POST["nome"]) || 
        empty($_POST["nome"])) {
        return;
    }

    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $data_nascimento = $_POST["data-nascimento"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $sql = "INSERT INTO usuario (
                nome,
                sobrenome,
                data_nascimento,
                email,
                senha
            ) VALUES 
            (
                '$nome',
                '$sobrenome',
                STR_TO_DATE('$data_nascimento', '%d/%m/%Y'),
                '$email',
                MD5('$senha')
            )";

    if ($conexao->query($sql)) {
        echo "cadastro realizado com sucesso $conexao->insert_id";
    } else {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Ops!</strong> Ocorreu um erro. Contate o Administrador.
                
                <br>
                
                '.$conexao->error.'

                <br>

                '.$sql.'

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>';
    }
?>