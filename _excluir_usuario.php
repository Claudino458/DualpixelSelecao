<?php
require_once 'includes/conexao.php';


$id = $_GET['idusuario'];


$sql = "DELETE FROM usuario WHERE idusuario = $id";
$deletar = mysqli_query($banco,$sql)

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf8">
	<title>Exclusão de Usuário</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="https://kit.fontawesome.com/8786c39b09.js"></script>	
</head>
<body>

<div class="container" id="tamanhoContainer" >
	<?php
		if (!$deletar){
			echo"Erro ao excluir o usuário";
		}else{
			echo "<h4><strong>Usuário excluído com sucesso!</strong></h4>";
		}
	?>
	<center>
	<a href="_listar_usuario.php" role="button" id="botao" class="btn btn-sm btn-warning">Voltar</a>
	<center>	
</div>

<script type="text/javascript" src="js/bootstrap.js"></script>

</body>
</html>
