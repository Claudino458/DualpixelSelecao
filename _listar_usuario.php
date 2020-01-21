<?php require_once 'includes/conexao.php';?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf8">
	<title>Lista de Usuários</title>
	<link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/8786c39b09.js"></script>	
</head>
<body>

<div class="container" style="margin-top: 40px" >
    <h4>Lista de Usuários</h4><br>
<table class="table">
  <thead>
      <tr>
          <th>
              
              <th scope="col">Nome</th>
              <th scope="col">Email</th>
              <th scope="col">Profissão</th>
              <th scope="col">Ação</th>
          </th>
      </tr>
  </thead>
  
      
              <?php
                $sql = "SELECT * FROM usuario";
                $busca = mysqli_query($banco, $sql);
               
                while($array = mysqli_fetch_array($busca)){
                    $idusuario = $array['idusuario'];
                    $nome = $array['nome'];
                    $email = $array['email'];
                    $profissao = $array['profissao'];                
              ?>
              <tr>
                <td><?php echo $idusuario ?></td>
                <td><?php echo $nome ?></td>
                <td><?php echo $email ?></td>
                <td><?php echo $profissao ?></td>
                <td><a class="btn btn-sm btn-info" href="_editar_usuario.php?idusuario=<?php echo $idusuario?>" role="button"><i class="far fa-edit"></i>&nbsp;Editar</a>
                    <a class="btn btn-sm btn-danger" href="_excluir_usuario.php?idusuario=<?php echo $idusuario?>" role="button"><i class="far fa-trash-alt"></i>&nbsp;Excluir</a>
                </td>
                <?php } ?>
             </tr>
  
</table>
                    <div style="text-align: right">
                    <a href="index.php" role="button" type="submit" class="btn btn-sm btn-warning"><strong>Voltar</strong></a>
                    </div>
</div>

<script type="text/javascript" src="js/bootstrap.js"></script>

</body>
</html>