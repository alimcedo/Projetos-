<?php
	ob_start();
	if(($_SESSION['usuarioId'] == "") || ($_SESSION['usuarioNome'] == "") || ($_SESSION['usuarioNivelAcesso'] == "") || ($_SESSION['usuarioLogin'] == "")
		|| ($_SESSION['usuarioSenha'] == "")){
			unset($_SESSION['usuarioId'], //caso algum campo esteja vázio, destrua todas as variáveis.
				  $_SESSION['usuarioNome'],
				  $_SESSION['usuarioNivelAcesso'],
				  $_SESSION['usuarioLogin'],
				  $_SESSION['usuarioSenha']);
				  
	$_SESSION['loginErro'] = "Acesso Inválido - Área Restrita!";
	
	
	header("Location: login.php");
		}
	?>