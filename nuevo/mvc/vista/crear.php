<?php 

include_once("../controlador/producto_controlador.php");

	$controlador = new controladorProducto();
	if(isset($_POST['enviar'])){
		$r=$controlador->crear($_POST['Nombre'],$_POST['Precio'],$_POST['Cantidad']);
		if($r){
			echo "Se ha registrado un nuevo usuario";
		}else{
			echo"Ya existe";
		}
	}


 ?>

 <h3>Crear un nuevo Producto</h3>
<hr>
<form action="" method="post">
	<label>Nombre</label> <br>
	<input type="text" name="Nombre">
	<br><br>
	<label>Precio</label> <br>
	<input type="text" name="Precio" requrired>
	<br><br>
	<label>Cantidad</label> <br>
	<input type="text" name="Cantidad" requrired>
	<br><br>
	<input type="submit" name= "enviar" value="Crear">