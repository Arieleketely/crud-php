<?php

session_start();
include_once("./conexao.php");

$nome =  $_POST["nome"];
$email =$_POST["email"];
$telefone =$_POST["telefone"];
$mensagem =$_POST["mensagem"];

$result_usuario = "insert into idusuarios (nome, email,telefone,mensagem) values ('{$nome}', {$email},{$telefone},{$mensagem})";
$resultado_usuario = mysqli_query($conn, $result_usuario);

