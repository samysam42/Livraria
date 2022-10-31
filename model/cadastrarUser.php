<?php
require_once("conexao.php");
session_start();
    if(isset($_GET["email"]) && $_GET["email"] != "" && isset($_GET["cpf"]) && $_GET["cpf"] != "" &&
    isset($_GET["senha"]) && $_GET["senha"] != ""){
        $sql = "INSERT INTO usuario (email, senha, cpf) Values ('$_GET[email]', '$_GET[senha]', $_GET[cpf])";

        if($conexao->query($sql) === TRUE){
            $_SESSION['mensagem'] = "Usuário cadastrado!";
            header("Location: ../view/_index.php");
        }
    }
?>