<?php
require_once 'includes/conexao.php';


$id    = $_POST['id'];
$nome  = $_POST['nome'];
$email = $_POST['email'];
$pro   = $_POST['profissao'];

$sql = "UPDATE usuario SET nome='$nome', email='$email', profissao='$pro' WHERE idusuario = '$id' ";
$atualiza = mysqli_query($banco, $sql);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf8">
	<title><strong>Atualizar Cadastro</strong></title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="https://kit.fontawesome.com/8786c39b09.js"></script>	
</head>
<body>

<div class="container" id="tamanhoContainer" >
	<?php
		if (!$atualiza){
			echo"Erro ao cadastrar o usuário";
		}else{
			echo "<h4><strong>Usuário alterado com sucesso!</strong></h4>";
		}
	?>
	<center>
	<a href="_listar_usuario.php" role="button" id="botao" class="btn btn-sm btn-warning">Voltar</a>
	<center>	
</div>

<script type="text/javascript" src="js/bootstrap.js"></script>

</body>
</html>