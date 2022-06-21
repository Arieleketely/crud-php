
<?php

session_start();
include_once("./conexao.php");

$id =  $_GET["id"];
echo($id);

$result_usuario = "DELETE FROM idusuarios WHERE id='$id'";
$resultado_usuario = mysqli_query($conn, $result_usuario);
