<?php 
include("conexao.php"); // caminho do seu arquivo de conexão ao banco de dados $consulta = "SELECT * FROM usuario"; $con = $mysqli->query($consulta) or die($mysqli->error); 
?> 

<!DOCTYPE html> 
  <html> 
    <head> 
      <meta charset="UTF-8"> 
      <title>Tutorial</title> 
    </head> 
    <body> 
      <table border="1"> 
        <tr> 
          <td>Código</td> 
          <td>Nome</td> 
          <td>E-mail</td> 
          <td>Telefone</td> 
          <td>Mensagem</td> 
          <td>Opção</td> 
        </tr> 
        <?php 	while($resultado_usuario = mysqli_fetch_assoc($resultado_usuarios)){ ?> 
        <tr> 
          <td><?php echo $resultado_usuario['id']; ?></td>
          <td><?php echo $resultado_usuario['email']; ?></td> 
          <td><?php echo $resultado_usuario['telefone']; ?></td> 
          <td><?php echo $resultado_usuario['mensagem']; ?></td> 
          <td><?php echo $resultado_usuario['opcao']; ?></td> 
          <td> 
          <?php echo $resultado_usuario['id']; ?>">Editar
        
          </td> 
        </tr> 
        <?php } ?> 
      </table> 
    </body> 
</html>