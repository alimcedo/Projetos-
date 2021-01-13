<?php
	session_start();
	include_once("seguranca.php");
?>

<?php
?>
	<div class="container theme-showcase" role="main">
		<div class="page-header">
			<h1>Cadastro de Usuários</h1>
		</div>
		<div class="row">
			<div class="col-md-12">
				<form class="form-horizontal" method="POST" action="processa/proc_cad_usuario.php">
				
		  <div class="form-group">
			<label for="inputNome" class="col-sm-2 control-label">Nome:</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="nome" placeholder="Digite seu Nome" required autofocus>
			</div>
		  </div>
		  
		  <div class="form-group">
			<label for="inputE-mail" class="col-sm-2 control-label">E-mail:</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="email" placeholder="Digite seu E-mail" required autofocus>
			</div>
		  </div>
		  
		  <div class="form-group">
			<label for="inputUsuario" class="col-sm-2 control-label">Usuários:</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="usuario" placeholder="Digite o nome de seu Usuário" required>
			</div>
		  </div>

		  <div class="form-group">
			<label for="inputSenha" class="col-sm-2 control-label">Senha:</label>
			<div class="col-sm-10">
				<input type="password" class="form-control" name="senha" placeholder="Digite sua Senha" required>
			</div>	
		  </div>
		  
			
		  <div class="form-group">
			<label for="inputNivel" class="col-sm-2 control-label">Nivel de Acesso:</label>
			<div class="col-sm-10">
				<select class="form-control" name="nivel_de_acesso" required>
					<option></option>
					<option value="1">Administrativo</option>
					<option value="2">Usuário</option>
				</select>
			</div>
		  </div>

		  <div class="form-group">
			<div class="col-sm-offset-2 col-sm-10"><br>
				<button type="submit" class="btn btn-info">Salvar</button>
				<a href='administrativo.php?link=0&id=<?php echo $resultado['id'];?>'>
				<button type='button' class='btn btn-danger'>Cancelar</button></a>
			<div>
		  </div>
	</form>
	</div>
	</div>
	</div>
			