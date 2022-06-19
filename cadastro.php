<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="./css/styledois.css">

<table>
	<td>Id</td>
	<td>Nome</td>
	<td>E-mail</td>
	<td>Telefone</td>
	<td>Mensagem</td>
	<td>Ação</td>

<?php

session_start();
include_once("./conexao.php");

$nome =  $_POST["nome"];
$email =$_POST["email"];
$telefone =$_POST["telefone"];
$mensagem =$_POST["mensagem"];
$opcao =$_POST["opcao"];

$result_usuario = "insert into idusuarios (nome, email,telefone,mensagem,opcao) values ('{$nome}', {$email},{$telefone},{$mensagem},{$opcao})";
$resultado_usuario = mysqli_query($conn, $result_usuario);


$result_usuarios = "SELECT * FROM idusuarios";
		$resultado_usuarios = mysqli_query($conn, $result_usuarios);
	
		while($row_usuario = mysqli_fetch_assoc($resultado_usuarios)){
		
			echo "<tr><td>" . $row_usuario['id']."</td>" ;
			echo "<td> " . $row_usuario['nome']."</td>";
			echo "<td>" . $row_usuario['email']."</td>";
			echo "<td>" . $row_usuario['telefone']."</td>";
			echo "<td>" . $row_usuario['mensagem']."</td>";
			 echo "<td>". "<a href=\"para_onde_vai_apontar_o_link\">Cadastrar<a/>"."</td>";
			 echo "<td>". "<a href=\"para_onde_vai_apontar_o_link\">Alterar<a/>"."</td>";
			 echo "<td>". "<a href=\"para_onde_vai_apontar_o_link\">Excluir<a/>"."</td></tr>"; 

		}
		echo "<br>";
?>
</table>
<style>
