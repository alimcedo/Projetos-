<?php
    session_start();
	include_once("../seguranca.php");
	include_once("../conexao.php");
$nome = $_POST['nome'];
$email = $_POST['email'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$nivel_de_acesso = $_POST['nivel_de_acesso'];
$query = mysql_query ("INSERT INTO usuarios (nome, email, login, senha, nivel_acesso_id, creat)
VALUES ('$nome','$email','$usuario','$senha','$nivel_de_acesso', NOW())");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
</head>
<body>
<?php
if (mysql_affected_rows() != 0){
	echo"
	<META HTTP-EQUIV=REFRESH CONTENT=
	'0; URL=http://localhost/info2/administrativo.php?link=3'>
	<script type=\"text/javascript\">
	   alert (\"Usuário cadastrado com sucesso!\");
	</script>
	  
	";
}
else{
	echo"
	<META HTTP-EQUIV=REFRESH CONTENT=
	'0; URL=http://localhost/info2/administrativo.php'>
	<script type=\"text/javascript\">
	   alert (\"Erro! Os registros não foram salvos!\");
	</script>
	  
	";
}
?>
    </body>
</html>	
	