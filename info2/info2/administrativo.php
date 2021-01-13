<?php
	session_start();
	include_once("seguranca.php");
	include_once("conexao.php");
	echo "Usuário: ".$_SESSION['usuarioNome'];
?>

<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Paniel Administrativo">
		<meta name="author" content="Alice Macedo">
		<title>Paniel Administrativo</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.min.css" rel="stylesheet">
		<link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
		<link href="css/theme.css" rel="stylesheet">
		<script src="js/ie-emulation-modes-warning.js"></script>
		
	</head>
	
	<body role="document">
		<?php
			include_once("menu_admin.php");
			
			$link = $_GET["link"];
			
			$pag[1] = "bem_vindo.php";
			$pag[2] = "listar_usuarios.php";
			$pag[3] = "cad_usuarios.php";
			$pag[4] = "editar_usuario.php";
			$pag[5] = "visual_usuario.php";
			$pag[6] = "cad_produtos.php";
			$pag[7] = "listar_produtos.php";
			$pag[8] = "visual_produtos.php";
			$pag[9] = "editar_produtos.php";
			
			if(!empty($link)){
				if(file_exists($pag[$link])){
					include $pag[$link];
				}else{
					include "bem_vindo.php";
					
				}
			}else{
					include "bem_vindo.php";
			}
       ?>			
	   
	   <script src="js/jquery.min.js"></script>
	   <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
	   <script src="js/bootstrap.min.js"></script>		
	   <script src="js/docs.min.js"></script>
	   <script src="js/ie10-viewport-bug-workaround.js"></script>
	</body>
</html>	
