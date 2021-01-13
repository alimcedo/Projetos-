<?php
session_start();
include_once("seguranca.php");
$id =$_GET['id'];
$result=mysql_query ("SELECT * FROM usuarios WHERE id =' $id' LIMIT 1");
$resultado=mysql_fetch_assoc ($result);
?>
<?php
	?>
	<div class="container theme-showcase" role="main">
		  <div class="page-header">
		  <h1>Visualizar Produtos</h1>
		  </div>
		  
		  <div class="row">
		   <div class="pull-righ">
		   <a href='administrativo.php?link=8&id=<?php echo $resultado['idprodutos'];?>'>
				<button type='button' class='btn btn-info'>Listar</button></a>
				
				<a href='administrativo.php?link=8&id=<?php echo $resultado['idprodutos'];?>'>
				<button type='button' class='btn btn-warning'>Editar</button></a>
				
				<a href='processa/proc_apagar_produto.php?id=<?php echo $resultado['idprodutos'];?>'>
				<button type='button' class='btn btn-danger'>Excluir</button></a>
				</div>
				<br></br>
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
				<b>ID:</b>
			  </div>
			  <div class="col-xs-9 col-sm-11 col-md-11">
				<?php echo $resultado['idprodutos']; ?>
			   </div>
				</td>
			  </tr>
			  <tr> 
				<td> 
				<div class="col-xs-3 col-sm-1 col-md-1">
				<b>Nome:</b>
			  </div>
			  <div class="col-xs-9 col-sm-11 col-md-11">
				<?php echo $resultado['nomeprodutos']; ?>
			   </div>
				</td>
			  </tr>
			  <tr> 
				<td> 
				<div class="col-xs-3 col-sm-1 col-md-1">
				<b>Categoria:</b>
			  </div>
			  <div class="col-xs-9 col-sm-11 col-md-11">
				<?php echo $resultado['categoria']; ?>
			   </div>
				</td>
			  </tr>
			   <tr> 
				<td> 
				<div class="col-xs-3 col-sm-1 col-md-1">
				<b>Quantidade:</b>
			  </div>
			  <div class="col-xs-9 col-sm-11 col-md-11">
				<?php echo $resultado['quantidade']; ?>
			   </div>
				</td>
			  </tr>
		   </tbody>
	</table>
	</div>
	</div>
				<a href='administrativo.php?link=7&id=<?php echo $resultado['id'];?>'>
				<button type='button' class='btn btn-danger'>Voltar</button></a>
				</div>
		  