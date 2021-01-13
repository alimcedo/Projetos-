<?php
 session_start();
 include_once("../seguranca.php");
 include_once("../conexao.php");
 $id = $_GET['id'];
 $query = mysql_query("DELETE FROM produtos WHERE idprodutos ='$id'");
 ?>
 <!DOCTYPE html>
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
	   alert(\"Produto excluido com sucesso!\");
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
	   