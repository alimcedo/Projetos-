<?php
session_start();
$usuariot = $_POST ['usuario'];
$senhat   = $_POST['senha'];
include_once("conexao.php");

$result = mysql_query ("SELECT * FROM usuarios WHERE login='$usuariot' AND senha='$senhat' LIMIT 1");
$resultado = mysql_fetch_assoc($result);

if (empty ($resultado)){
	//mensagem de error
	$_SESSION['loginErro'] = "Usuario ou senha Inválido";
	
	//manda o usuario de volta para a tela de login
	header("Location: login.php");
} else {
	//Define os valores atribuidos na sessão do usuario
    $_SESSION['usuarioId']		 	= $resultado['id'];
	$_SESSION['usuarioNome'] 		= $resultado['nome'];
	$_SESSION['usuarioNivelAcesso'] = $resultado['nivel_acesso_id'];
	$_SESSION['usuarioLogin']       = $resultado['login'];
	$_SESSION['usuarioSenha']       = $resultado['senha'];
	
	//verifica o nivel de acesso e redireciona
	if ($_SESSION['usuarioNivelAcesso']== 1) {
		header ("Location: administrativo.php");
	}else{
		header("Location: usuario.php");
	}
}
?>