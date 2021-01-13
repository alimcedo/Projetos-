<?php  
   session_start();
 include_once("seguranca.php");
 $id = $_GET['id'];
 
 $result=mysql_query("SELECT * FROM produtos ORDER BY 'idprodutos' LIMIT 1");
 $resultado=mysql_fetch_assoc($result);
 ?>
 <?php
 ?>
 <div class="container theme-showcase" role="main">
 <div class="page-header">
 <h1>Editar Produtos</h1>
 </div>
 
 <div class="row">
 <div class="col-md-12">
 <form class="form-horizontal" method="POST" action="processa/proc_edit_produto.php">
 
 <div class="form-group">
	   <label for="inputNome" class="col-sm-2 control-label">Nome</label>
	   <div class="col-sm-10">
	   <input type="text" class="form-control" name="nome" placeholder="nome" required autofocus
	   value="<?php echo $resultado['nomeprodutos'];?>">	   
	</div>
</div>

   <div class="form-group">
<label for="inputCategoria" class="col-sm-2 control-label">Categoria</label>
<div class="col-sm-10">
<input type="text" class="form-control" name="email" placeholder="e-mail" required
value="<?php echo $resultado['categoria'];?>">
</div>
</div>

    <div class="form-group">
  <label for="inputQuantidade" class="col-sm-2 control-label">Quantidade</label>
  <div class="col-sm-10">
    <input type="number" class="form-control" name="usuario" placeholder="" required
	value="<?php echo $resultado['quatidade'];?>">
	</div>
	</div>

<div class="form-group">
<div class="col-sm-offset-2 col-sm-10">
<button type="submit" class="btn btn-info">Salvar</button>
<a href='administrativo.php?link=2&id=<?php echo $resultado ['id']; ?>'>
<button type='button' class="btn btn-danger">Cancelar</button></a>
</div>
</div>
</form>
</div>
</div>
</div>
	
