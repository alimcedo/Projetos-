<?php
 session_start();
 include_once("seguranca.php");
 ?>
 <?php
 $resultado=mysql_query("SELECT * FROM produtos ORDER BY 'idprodutos'");
 $linhas=mysql_num_rows($resultado);
 ?>
 <div class="container theme-showcase" role="main">
 <div class="page-header">
 <h1>Lista de Produtos</h1>
 </div>
 <div class="row">
 <div class="col-md-12">
 <table class="table table-striped">
 <thead>
 <tr>
 <th>ID</th>
 <th>Nome</th>
 <th>Categoria</th>
 <th>Quantidade</th>
 <th>Ações</th>
 </tr>
 
 </thead>
 <tbody>
 
 <?php
  while($linhas = mysql_fetch_array($resultado)){
		 echo "<tr>";
		 echo "<td>".$linhas['idprodutos']."</td>";
		 echo "<td>".$linhas['nomeprodutos']."</td>";
		 echo "<td>".$linhas['categoria']."</td>";
		 echo "<td>".$linhas['quantidade']."</td>";
		 
  ?>
 <td>
 <a href='administrativo.php?link=8&id=<?php echo $linhas['idprodutos']; ?>'>
 <button type='button' class='btn btn-sm btn-primary'>Exibir</button></a>
 
 <a href='administrativo.php?link=9&id=<?php echo $linhas['idprodutos']; ?>'>
 <button type='button' class='btn btn-sm btn-warning'>Editar</button></a>
 
 <a href='processa/proc_apagar_produto.php?id=<?php echo $linhas['idprodutos']; ?>'>
 <button type='button' class='btn btn-sm btn-danger'>Apagar</button></a>
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
	 