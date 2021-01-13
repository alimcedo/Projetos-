<?php
	session_start();
	include_once("seguranca.php");
?>

<?php
?>
	<div class="container theme-showcase" role="main">
		<div class="page-header">
			<h1>Cadastro de Produtos</h1>
		</div>
		<div class="row">
				<form class="form-horizontal" method="POST" action="processa/proc_cad_produto.php">
				
				<div class="form-group">
			<label for="inputNome" class="col-sm-2 control-label">Nome:</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="nomeprodutos" placeholder="" required autofocus>
			</div>
		  </div>
		  
		  <div class="form-group">
			<label for="inputCategoria" class="col-sm-2 control-label">Categoria:</label>
			<div class= "col-sm-10">
			<select class="form-control" name="categoria" required>
			<option></option>
			<option>processador</option>
			<option>disco</option>
			<option>impressora</option>
			</select>
			</div>
			</div>
		  
		  <div class="form-group">
			<label for="inputQuantidade" class="col-sm-2 control-label">Quantidade:</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="usuario" placeholder="" required>
			</div>
			</div>
			
			
<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10"><br>
				<button type="submit" class="btn btn-info">Salvar</button>
				<a href='administrativo.php?link=1&id=<?php echo $resultado['idprodutos'];?>'>
				<button type='button' class='btn btn-danger'>Cancelar</button></a>
			<div>
		  </div>
	</form>
	</div>
	</div>
	</div>
			
		  </div>