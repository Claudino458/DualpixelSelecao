<?php require_once'includes/conexao.php';?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf8">
	<title>Sistema de Cadastro</title>
	<link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://kit.fontawesome.com/8786c39b09.js"></script>
	
</head>
<body>
	
<div class="container" id="tamanhoContainer">
	<h4><strong>Formulário de Cadastro</strong></h4>
<form id="formcadastro" action="_inserir_usuario.php" method="post">
  <div class="form-group">
    <label><strong>Nome :</strong></label>
    <input type="text" class="form-control" id="nomeusuario" name="nome"  placeholder="Informe o seu nome" autocomplete="off" required>
    
  </div>

  <div class="form-group">
    <label><strong>Email :</strong></label>
    <input type="email" class="form-control" id="emailusuario" name="email"  placeholder="Informe seu Email" autocomplete="off" required>
    
  </div>

  <div class="form-group">
    <label><strong>Profissao :</strong></label>
    <select class="form-control" name="profissao">
            <?php
                $sql = 'select * from profissao order by profissao ASC';
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
      <a href="index.php" role="button" type="submit" class="btn btn-warning">Voltar</a>
  		<button type="submit" class="btn btn-success">Cadastrar</button>
  	</div>
  	
  	
</form>
</div>





<script type="text/javascript" src="js/bootstrap.js"></script>

</body>
</html>