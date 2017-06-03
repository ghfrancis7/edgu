<?php 

include_once("conexion.php");

	class Producto {
		private $IDMueble;
		private $Nombre;
		private $Precio;
		private $Cantidad;

		private $con;


		public function __construct(){

			$this->con = new Conexion();

		}
		public function set($atributo,$contenido){
			$this->atributo=$contenido;

		}
		public function get($atributo){
			return $this->$atributo;
		}

		public function crear(){

			$sql= "INSERT INTO muebles (Nombre,Precio,Cantidad)
					VALUES ('$this->Nombre', '$this->Precio', '$this->Cantidad')";

			$this->con->consultaSimple($sql);
				return true;

	}
}
 ?>
