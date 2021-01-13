<?php
 session_start();
 include_once("../seguranca.php");
 include_once("../conexao.php");
 $id = $_POST['idprodutos'];
 $nome = $_POST['nome'];
 $categoria = $_POST['categoria'];
 $quantidade = $_POST['quantidade'];
 $query = mysql_query("UPDATE produtos set nomeprodutos = '$nome', categoria = '$categoria', quantidade = '$quantidade', modified = NOW() WHERE id = '$idprodutos'");
 ?>
 <html lang="pt-br">
 
   <head>
     <meta charset="utf-8">
	    </head>
		<body>
<?php
   if (mysql_affected_rows()  !=0){
	   echo"
	   <META HTTP-EQUIV=REFRESH CONTENT=
	   '0;URL=http://localhost/info2/administrativo.php?link=7'>
	   <script type=\"text/javascript\">
	   alert(\"Produto alterado com sucesso!\");
	   </script>
	   
	 ";
   }
   else{
	   echo"
	    <META HTTP-EQUIV=REFRESH CONTENT=
	   '0;URL=http://localhost/info2/administrativo.php'>
	   <script type=\"text/javascript\">
	   alert(\"Erro! Os registros não foram salvos!\");
	   </script>
	   
	 ";
   }
   ?>
      </body>
</html>