<?php 
include_once("Conexion.php");

	class Producto{

		private $IDProducto;
		private $IDLote;
		private $IDProductoTratamiento;
		private $ProductoNombre;
		private $ProductoPrecio;
		private $ProductoFechaAltaDB;
		private $ProductoFechaBajaDB;
		private $ProductoEstado;

		private $con;


		public function __construct(){
			$this->con =new Conexion();
		}

		public function listarProducto(){

			$sql="SELECT * FROM Producto";
			$resultado= $this->con->consultaRetorno($sql);
			return $resultado;
		}



		public function crearProducto($ProductoNombre,$ProductoPrecio,$ProductoFechaAltaDB,$ProductoFechaBajaDB,$ProductoEstado){

			$sql2="SELECT * FROM Producto Where IDProducto = '($this->IDProducto)'";
			$resultado = $this->con->consultaRetorno($sql2);
			$num=mysql_num_rows($resultado);

			if ($num !=0) {

				return false;

			}else{

				$sql="INSERT INTO Producto (ProductoNombre,ProductoPrecio,ProductoFechaAltaDB,ProductoFechaBajaDB,ProductoEstado)
			VALUES ('$ProductoNombre', '$ProductoPrecio', '$ProductoFechaAltaDB', '$ProductoFechaBajaDB', '$ProductoEstado')";

				$this->con->consultaSimple($sql);
				return true;
			}


		}


	}


 ?>