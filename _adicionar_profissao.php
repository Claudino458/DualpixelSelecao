<?php require_once 'includes/conexao.php';?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf8">
	<title><strong>Cadastro de Profissao</strong></title>
	<link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://kit.fontawesome.com/8786c39b09.js"></script>
	
</head>
<body>
	
<div class="container" id="tamanhoContainer">
	<h4><strong>Cadastro Profissão</strong></h4>
<form id="formcadastro" action="_inserir_profissao.php" method="post">
  <div class="form-group">
    <label><strong>Profissão :</strong></label>
    <input type="text" class="form-control" id="minhaprofissao" name="profissao"  placeholder="Informe o sua profisão" autocomplete="off" required>
    
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