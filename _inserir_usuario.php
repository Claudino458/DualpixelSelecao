<?php
require_once "includes/conexao.php";

$nome  = $_POST['nome'];
$email = $_POST['email'];
$pro   = $_POST['profissao'];

$sql="INSERT INTO usuario (nome,email,profissao) VALUES ('$nome','$email','$pro')";
$resultado=mysqli_query($banco,$sql);

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
		if (!$resultado){
			echo"Erro ao cadastrar o usuário";
		}else{
			echo "<h4>Usuário adicionado com sucesso!</h4>";
		}
	?>
	<center>
	<a href="_adicionar_usuario.php" role="button" id="botao" class="btn btn-sm btn-warning">Voltar</a>
	<center>	
</div>

<script type="text/javascript" src="js/bootstrap.js"></script>

</body>
</html>