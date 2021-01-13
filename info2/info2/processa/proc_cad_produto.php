<?php
    session_start();
	include_once("../seguranca.php");
	include_once("../conexao.php");

 $nomeprodutos = $_POST['nomeprodutos'];
 $categoria = $_POST['categoria'];
 $quantidade= $_POST['quantidade'];
 $query = mysql_query ("INSERT INTO produtos (nomeprodutos, categoria, quantidade, creat)
VALUES ('$nomeprodutos','$categoria','$quantidade', NOW())");
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
	'0; URL=http://localhost/info2/administrativo.php?link=6'>
	<script type=\"text/javascript\">
	   alert (\"Produto cadastrado com sucesso!\");
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
	