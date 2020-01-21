<?php
require_once 'includes/conexao.php';

$profissao = $_POST['profissao'];

$sql = "INSERT INTO profissao (profissao) VALUES ('$profissao')";
$inserir = mysqli_query($banco, $sql);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf8">
	<title>Cadastro de Usuário</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="https://kit.fontawesome.com/8786c39b09.js"></script>	
</head>
<body>

<div class="container" id="tamanhoContainer" >
	<?php
		if (!$inserir){
			echo"Erro ao cadastrar profissão";
		}else{
			echo "<h4>Profissão cadastrado com sucesso!</h4>";
		}
	?>
	<center>
	<a href="_adicionar_profissao.php" role="button" id="botao" class="btn btn-sm btn-warning">Voltar</a>
	<center>	
</div>

<script type="text/javascript" src="js/bootstrap.js"></script>

</body>
</html>