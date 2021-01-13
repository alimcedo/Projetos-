<?php
 session_start();
 include_once("seguranca.php");
 ?>
 <?php
 $resultado=mysql_query("SELECT * FROM usuarios ORDER BY 'id'");
 $linhas=mysql_num_rows($resultado);
 ?>
 <div class="container theme-showcase" role="main">
 <div class="page-header">
 <h1>Lista de Usuários</h1>
 </div>
 <div class="row">
 <div class="col-md-12">
 <table class="table table-striped">
 <thead>
 <tr>
 <th>ID</th>
 <th>Nome</tr>
 <th>E-mail</th>
 <th>Nivel de Acesso</th>
 <th>Ações</th>
 </tr>
 </thead>
 <tbody>
 <?php
     while($linhas = mysql_fetch_array($resultado)){
		 echo "<tr>";
		 echo "<td>".$linhas['id']."</td>";
		 echo "<td>".$linhas['nome']."</td>";
		 echo "<td>".$linhas['email']."</td>";
		 echo "<td>".$linhas['nivel_acesso_id']."</td>";
		 
 ?>
 <td>
 <a href='administrativo.php?link=5&id=<?php echo $linhas['id']; ?>'>
 <button type='button' class='btn btn-sm btn-primary'>Exibir</button></a>
 
 <a href='administrativo.php?link=4&id=<?php echo $linhas['id']; ?>'>
 <button type='button' class='btn btn-sm btn-warning'>Editar</button></a>
 
 <a href='processa/proc_apagar_usuario.php?id=<?php echo $linhas['id']; ?>'>
 <button type='button' class='btn btn-sm btn-primary'>Apagar</button></a>
 </td>
 <?php 
 echo "</tr>";
 
 }
 ?>
 </tbody>
 </table>
 </div>
 </div>
 </div>
	 
 
 
 
