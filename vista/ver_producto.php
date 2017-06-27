<?php 

include_once("modelo/Producto.php");

	$controlador = new Producto();
	$resultado= $controlador->listarProducto();

 ?>

 <?php while($row = mysql_fetch_array($resultado)){ ?>
 		<br>
 		<br>
		Nombre: <?php echo "{$row['ProductoNombre']}"; ?>
		<br>
		Precio:<?php echo "{$row['ProductoPrecio']}";?>
		<br>
		Fecha de Alta:<?php echo "{$row['ProductoFechaAltaDB']}";?>
		<br>
		Fecha de Baja:<?php echo "{$row['ProductoFechaBajaDB']}";?>
		<br>
		Estado:<?php echo "{$row['ProductoEstado']}";}?>
		<br>