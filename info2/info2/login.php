<?php
	session_start();
?>	

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Pagina para realizar login">
<meta name="author" content="Aluno">
<link rel="icon" href="imagens/favicon.ico">
<title>Acesso ao Sistema</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/signin.css" rel="stylesheet">
<script src="js/ie-emulation-models-warning.js"></script>
</head>

<body>
<?php //destroi todas as variáveis impedindo acesso pela url
		unset($_SESSION['usuarioId'],
			  $_SESSION['usuarioNome'],
			  $_SESSION['usuarioNilvelAcesso'],
			  $_SESSION['usuarioLogin'],
			  $_SESSION['usuarioSenha']);
?>
<div class="container">
   <form class="form-signin" method="POST" action="valida_login.php">
   
   <h2 class="form-signin-heading text-center">Acesso ao Sistema</h2>
   <label for="imputEmail" class="sr-only">Usuário</label>
   <input type="text" name="usuario" class="form-control" placeholder="digitar o usuario" required autofocus><br />
   <label for="inputSenha" class="sr-only">Senha</label>
   <input type="password" name="senha" class="form-control" placeholder="digite a senha" required autofocus><br />
   
   <button class="btn btn-lg btn-primary btn-block" type="submit">Acessar</button>
   </form>
   <p class="text-center text-danger"> <!--bloco de condição para testar usuário inválido -->
			<?php
			if(isset($_SESSION['loginErro'])){// verifica se a variável global está vázia
			echo $_SESSION['loginErro']; // caso sim, imprime a variável global
			unset ($_SESSION['loginErro']);// destrói a variável global
			}
			?>
			</p>
   </div> 
   
   <script src="js/ie10-viewport-bug-workaround.js"></script>
   </body>
   </html>
   