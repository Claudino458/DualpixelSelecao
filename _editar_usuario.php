<?php
require_once 'includes/conexao.php';
echo $id = $_GET['idusuario'];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf8">
	<title>Sistema de Cadastro| Editar Usuario</title>
	<link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/8786c39b09.js"></script>
	
</head>
<body>
	
<div class="container" id="tamanhoContainer">
	<h4><strong>Editar Usuário<strong></h4>
<form id="formcadastro" action="_atualizar_usuario.php" method="post">
    <?php
    
    $sql = "SELECT * FROM usuario WHERE idusuario = $id";
    $busca = mysqli_query($banco, $sql);
   
    while($array = mysqli_fetch_array($busca)){
        $idusuario = $array['idusuario'];
        $nome = $array['nome'];
        $email = $array['email'];
        $profissao = $array['profissao'];
    ?>

  <div class="form-group">
    <label><strong>Nome :</strong></label>
    <input type="text" class="form-control" id="nomeusuario" name="nome" value="<?php echo $nome ?>" >
    <input type="text" class="form-control"  name="id" value="<?php echo $id ?>" style="display: none">
    
  </div>

  <div class="form-group">
    <label><strong>Email :</strong></label>
    <input type="email" class="form-control" id="emailusuario" name="email"  value="<?php echo $email ?>" >
    
  </div>

  <div class="form-group">
    <label><strong>Profissao :</strong></label>
    <select class="form-control" name="profissao">
            <?php
                $sql = 'select * from profissao';
                $resutado = mysqli_query($banco, $sql);
                while($array=mysqli_fetch_array($resutado)){
                    $idprofissao = $array['idprofissao'];
                    $nome=$array['profissao']; 
            ?>
                <option><?php echo $nome ?></option>
            <?php }?>



    </select>
  </div>
    <div style="text-align: right;">
      <a href="_listar_usuario.php" role="button" type="submit" class="btn btn-warning">Voltar</a>
  		<button type="submit" class="btn btn-success">Alterar</button>
  	</div>
  	
    <?php } ?>
</form>
</div>





<script type="text/javascript" src="js/bootstrap.js"></script>

</body>
</html>