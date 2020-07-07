<?php
    function conectar_banco_de_dados() {
        $servidor = "localhost";
        $usuario = "root";
        $senha = "";
        $bando_de_dados = "senac-cars";
    
        $conexao = new mysqli($servidor, $usuario, $senha, $bando_de_dados);
    
        if ($conexao->connect_error) {
          die("Ops! Conexão falhou :( " . $conexao->connect_error);
        }
        
        return $conexao;
    }
?>