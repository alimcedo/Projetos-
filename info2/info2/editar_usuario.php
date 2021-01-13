<?php  
   session_start();
 include_once("seguranca.php");
 $id = $_GET['id'];
 
 $result=mysql_query("SELECT * FROM usuarios ORDER BY 'id' LIMIT 1");
 $resultado=mysql_fetch_assoc($result);
 ?>
 <?php
 ?>
 <div class="container theme-showcase" role="main">
 <div class="page-header">
 <h1>Editar Usuário</h1>
 </div>
 <div class="row">
 <div class="col-md-12">
     <form class="form-horizontal" method="POST" action="processa/proc_edit_usuario.php">
	 
	 <div class="form-group">
	   <label for="inputNome" class="col-sm-2 control-label">Nome</label>
	   <div class="col-sm-10">
	   <input type="text" class="form-control" name="nome" placeholder="nome completo" required autofocus 
	   value="<?php echo $resultado['nome'];?>">	   
	</div>
</div>

   <div class="form-group">
<label for="inputE-mail" class="col-sm-2 control-label">E-mail</label>
<div class="col-sm-10">
<input type="email" class="form-control" name="email" placeholder="e-mail" required
value="<?php echo $resultado['email'];?>">
</div>
</div>

    <div class="form-group">
  <label for="inputUsuario" class="col-sm-2 control-label">Usuário</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" name="usuario" placeholder="nome de usuário" required
	value="<?php echo $resultado['login'];?>">
	</div>
	</div>

<div class="form-group">
<label for="inputSenhal" class="col-sm-2 control-label">Senha</label>
<div class="col-sm-10">
<input type="password" class="form-control" name="senha" placeholder="senha" required
value="<?php echo $resultado['senha'];?>">
</div>
</div>	

<div class="form-group">
<label for="inputNivel" class="col-sm-2 control-label">Nível de Acesso</label>
<div class="col-sm-10">
<select class="form-control" name="nivel_de_acesso" required>
<option></option>
<option value="1"
<?php
if ($resultdo['nivel_de_acesso'] ==1){
	echo 'selected';
}
?>
>Administrador</option>
<option value="2"
<?php
if ($resultdo['nivel_de_acesso'] ==2){
	echo 'selected';
}
?>

>Usuário</option>
</select>
</div>
  </div>
   <input type="hidden" name="id" value="<?php echo $resultado ['id']; ?>">

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
	
