<?php
	session_start ();
	include_once ('seguranca.php');
	$id = $_GET ['id'];
	//consulta
	$result=mysql_query ("SELECT * FROM usuarios WHERE id =' $id' LIMIT 1");
    $resultado=mysql_fetch_assoc ($result);
	?>
	<?php
	?>
		<div class="container theme-showcase" role="main">
		  <div class="page-header">
		  <h1>Visualizar Usuario</h1>
		  </div>
		  <div class="row">
		   <div class="col-md-12">
		   <table class="table table-striped">
		   <tbody>
		     <tr> 
				<td> 
				<div class="col-xs-3 col-sm-1 col-md-1">
				<b>ID:</b>
			  </div>
			  <div class="col-xs-9 col-sm-11 col-md-11">
				<?php echo $resultado['id']; ?>
			   </div>
				</td>
			  </tr>
			  
			  <tr> 
				<td> 
				<div class="col-xs-3 col-sm-1 col-md-1">
				<b>Nome:</b>
			  </div>
			  <div class="col-xs-9 col-sm-11 col-md-11">
				<?php echo $resultado['nome']; ?>
			   </div>
				</td>
			  </tr>
			  <tr> 
				<td> 
				<div class="col-xs-3 col-sm-1 col-md-1">
				<b>Email:</b>
			  </div>
			  <div class="col-xs-9 col-sm-11 col-md-11">
				<?php echo $resultado['email']; ?>
			   </div>
				</td>
			  </tr>
			  <tr> 
				<td> 
				<div class="col-xs-3 col-sm-1 col-md-1">
				<b>Usuario:</b>
			  </div>
			  <div class="col-xs-9 col-sm-11 col-md-11">
				<?php echo $resultado['usuario']; ?>
			   </div>
				</td>
			  </tr>
			  <tr> 
				<td> 
				<div class="col-xs-3 col-sm-1 col-md-1">
				<b>Nivel de Acesso:</b>
			  </div>
			  <div class="col-xs-9 col-sm-11 col-md-11">
				<?php echo $resultado['nivel_acesso_id']; ?>
			   </div>
				</td>
			  </tr>
	</tbody>
	</table>
	</div>
	</div>
				<a href='administrativo.php?link=2&id=<?php echo $resultado['id'];?>'>
				<button type='button' class='btn btn-danger'>Voltar</button></a>
				</div>
				
			  