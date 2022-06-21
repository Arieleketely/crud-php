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
$id =  $_POST["id"];
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
		
			
 
			 echo  "    <form method='POST' action='./index.html'> <td>"."<input class='btn btn-primary' type='submit' value='Cadastrar'></td></form>";
			 echo  "    <form method='POST' action='./alterar.php'> <td>"."<input class='btn btn-primary' type='submit' value='Alterar'></td></form>";
			 echo "   <form method='POST'><td class='btn btn-danger'><a   href='deletar.php?id=" . $row_usuario['id'] . "'>Apagar</a></td><tr>";
		}
		echo "<br>";
?>
</table>
<style>
