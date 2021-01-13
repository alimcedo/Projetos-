<?php
	session_start();
	include_once("segurança.php");
?>


<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">	
	  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	    <span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	  </button>
	  <a class="navbar-brand" href="usuario.php">Sistema de Cadastro</a>
	</div>
	<div id="navbar" class="navbar-collapse collapse">
	  <ul class="nav navbar-nav">
	    <li class="dropdown">
		  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Usuário <span class="caret">
		  </span></a>
		  <ul class="dropdown-menu">
		    <li><a href="usuario.php?link=2">Listar</a></li>
		  </ul>
		</li>

        <li class="dropdown">
		  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Produtos <span class="caret">
          </span></a>
		  <ul class="dropdown-menu">
		    <li><a href="usuario.php?link=7">Listar</a></li>
		  </ul>
		</li>
		<li><a href="sair.php">Sair</a></li>
	   </ul>
	</div>
</div>
</nav>