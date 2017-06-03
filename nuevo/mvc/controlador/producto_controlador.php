<?php 
include_once("../modelo/producto.php");

class controladorProducto {

	private $producto;

	public function __construct(){

		$this->producto=new Producto();
			
		}

public function crear($Nombre,$Precio,$Cantidad){
		

			$this->producto->set("Nombre",$Nombre);
			$this->producto->set("Precio",$Precio);
			$this->producto->set("Cantidad",$Cantidad);

			$resultado=$this->producto->crear();
			return $resultado;

		}

}


 ?>