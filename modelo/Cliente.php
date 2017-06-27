<?php 

include_once("Conexion.php");

	class Cliente{

		private $IDCliente;
		private $IDPlanta;
		private $ClienteNombre;
		private $ClienteCuit;
		private $ClienteDireccion;
		private $ClienteTelefono;
		private $ClienteCantidadPlantas;
		private $ClienteFechaAlta;
		private $ClienteFechaBaja;
		private $ClienteEstado;

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

	public function listarCliente(){

			$sql="SELECT * FROM Cliente";
			$resultado= $this->con->consultaRetorno($sql);
			return $resultado;
		}

	public function crearCliente($ClienteNombre,$ClienteCuit,$ClienteDireccion,$ClienteTelefono,$ClienteCantidadPlantas,$ClienteFechaAlta,$ClienteFechaBaja,$ClienteEstado){

			$sql2="SELECT * FROM Cliente Where IDCliente = '($this->IDCliente)'";
			$resultado = $this->con->consultaRetorno($sql2);
			$num=mysql_num_rows($resultado);

			if ($num !=0) {

				return false;

			}else{

				$sql="INSERT INTO Cliente (ClienteNombre,ClienteCuit,ClienteDireccion,ClienteTelefono,ClienteCantidadPlantas,ClienteFechaAlta,ClienteFechaBaja,ClienteEstado)
			VALUES ('$ClienteNombre', '$ClienteCuit', '$ClienteDireccion', '$ClienteTelefono', '$ClienteCantidadPlantas','$ClienteFechaAlta','$ClienteFechaBaja','$ClienteEstado')";

				$this->con->consultaSimple($sql);
				return true;
			}

}
			public function ver(){

			$sql="SELECT * FROM Cliente WHERE IDCliente ='($this->IDCliente)' LIMIT 1";
			$resultado = $this->con->consultaRetorno($sql);
			$row =mysql_fetch_assoc($resultado);

			//set
			$this->IDCliente = $row['IDCliente'];
			$this->ClienteNombre = $row['ClienteNombre'];
			$this->ClienteCuit = $row['ClienteCuit'];
			$this->ClienteDireccion = $row['ClienteDireccion'];
			$this->ClienteTelefono = $row['ClienteTelefono'];
			$this->ClienteCantidadPlantas = $row['ClienteCantidadPlantas'];
			$this->ClienteFechaAlta = $row['ClienteFechaAlta'];
			$this->ClienteFechaBaja = $row['ClienteFechaBaja'];
			$this->ClienteEstado = $row['ClienteEstado'];

			return $row;

		}
	}

 ?>