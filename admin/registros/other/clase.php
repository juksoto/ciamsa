<?php
// se declara una clase para hacer la conexion con la base de datos
class Conexion  
{
	var $con;
	function Conexion()
	{
		// se definen los datos del servidor de base de datos 
		$conection['server']="localhost";  //host
		$conection['user']="root";         //  usuario
		$conection['pass']="";             //password
		$conection['base']="inscripciones"; //base de datos
		
		// crea la conexion pasandole el servidor , usuario y clave
		$conect= mysql_connect($conection['server'],$conection['user'],$conection['pass']);

		if ($conect) // si la conexion fue exitosa , selecciona la base
		{
			mysql_select_db($conection['base']);			
			$this->con=$conect;
		}
	}
	function getConexion() // devuelve la conexion
	{
		return $this->con;
	}
	function Close()  // cierra la conexion
	{
		mysql_close($this->con);
	}	

}
// se declara una clase para poder ejecutar las consultas, esta clase llama a la clase anterior
class sQuery   
{

	var $coneccion;
	var $consulta;
	var $resultados;
	function sQuery()  // constructor, solo crea una conexion usando la clase "Conexion"
	{
		$this->coneccion= new Conexion();
	}
	function executeQuery($cons)  // metodo que ejecuta una consulta y la guarda en el atributo $pconsulta
	{
		$this->consulta= mysql_query($cons,$this->coneccion->getConexion());
		return $this->consulta;
	}	
	function getResults()   // retorna la consulta en forma de result.
	{return $this->consulta;}
	
	function Close()		// cierra la conexion
	{$this->coneccion->Close();}	
	
	function Clean() // libera la consulta
	{mysql_free_result($this->consulta);}
	
	function getResultados() // debuelve la cantidad de registros encontrados
	{return mysql_affected_rows($this->coneccion->getConexion()) ;}
	
	function getAffect() // devuelve las cantidad de filas afectadas
	{return mysql_affected_rows($this->coneccion->getConexion()) ;}

    function fetchAll()
    {
        $rows=array();
		if ($this->consulta)
		{
			while($row=  mysql_fetch_array($this->consulta))
			{
				$rows[]=$row;
			}
		}
        return $rows;
    }
}

class Usuarios
{
	 //se declaran los atributos de la clase, que son los atributos del usuario
	var $nombre;   
	var $identificacion;
	var $email;
	Var $telefono;
	Var $id;

    public static function getUsuarios() 
		{
			$obj_usuarios=new sQuery();
			$obj_usuarios->executeQuery("SELECT * FROM usuarios"); // ejecuta la consulta para traer los usuarios

			return $obj_usuarios->fetchAll(); // retorna todos los clientes
		}

	function Usuarios($nro=0) // declara el constructor, si trae el numero de usuarios lo busca , si no, trae todos los usuarios
	{
		if ($nro!=0)
		{
			$obj_usuarios=new sQuery();
			$result=$obj_usuarios->executeQuery("SELECT * FROM usuarios WHERE id = $nro"); // ejecuta la consulta para traer al cliente 
			$row=mysql_fetch_array($result);
			$this->id=$row['id'];
			$this->nombre=$row['nombre'];
			$this->identificacion=$row['identificacion'];
			$this->email=$row['email'];
			$this->telefono=$row['telefono'];
		}
	}
			
		// metodos que devuelven valores
	function getID()
	 { return $this->id;}
	function getNombre()
	 { return $this->nombre;}
	function getIdentficacion()
	 { return $this->identificacion;}
	function getEmail()
	 { return $this->email;}
	function getTelefono()
	 { return $this->telefono;}


		// metodos que setean los valores
	function setNombre($val)
	 { $this->nombre=$val;}
	function setIdentificacion($val)
	 {  $this->identificacion=$val;}
	function setEmail($val)
	 {  $this->email=$val;}
	function setTelefono($val)
	 {  $this->telefono=$val;}


    function save()
    {
        if($this->id)
        {
        $this->updateUsuarios();}
        else
        {$this->insertUsuarios();}
    }

	private function updateUsuarios()	// actualiza el usuario cargado en los atributos
	{
			$obj_usuarios=new sQuery();

			$query="update usuarios set nombre='$this->nombre', identificacion='$this->identificacion',email='$this->email',telefono='$this->telefono' where id = $this->id";
			$obj_usuarios->executeQuery($query); // ejecuta la consulta para traer al cliente 

			return $obj_usuarios->getAffect(); // retorna todos los registros afectados
	
	}
	private function insertUsuarios()	// inserta el cliente cargado en los atributos
	{
			$obj_usuarios=new sQuery();
			$query="insert into usuarios( nombre, identificacion, email,telefono)values('$this->nombre', '$this->identificacion','$this->email','$this->telefono')";
			
			$obj_usuarios->executeQuery($query); // ejecuta la consulta para traer al cliente 
			return $obj_usuarios->getAffect(); // retorna todos los registros afectados
	
	}	
	function delete()	// elimina el cliente
	{
			$obj_usuarios=new sQuery();
			$query="delete from usuarios where id=$this->id";
			$obj_usuarios->executeQuery($query); // ejecuta la consulta para  borrar el cliente
			return $obj_usuarios->getAffect(); // retorna todos los registros afectados
	}	
}

class Hijos
{
	var $nombreHijo;
	var $fechaNacimiento;
	var $ciudad;
	Var $idHijo;

	public static function getHijos($idUsuario) 
		{
			$obj_usuarios=new sQuery();
			$obj_usuarios->executeQuery("SELECT * FROM usuarios LEFT JOIN hijos ON usuarios.id=hijos.idUsuario WHERE usuarios.id = $idUsuario") or die(mysql_error); // ejecuta la consulta para traer los usuarios

			return $obj_usuarios->fetchAll(); // retorna todos los clientes
		}

	function Hijos($var=0) // declara el constructor, si trae el numero de usuarios lo busca , si no, trae todos los usuarios
	{
		if ($var!=0)
		{
			$obj_usuarios=new sQuery();
			
			$result=$obj_usuarios->executeQuery("SELECT * FROM hijos WHERE idHijo = $var") or die(mysql_error); // ejecuta la consulta para traer al cliente y
			$row=mysql_fetch_array($result);
			$this->idHijo=$row['idHijo'];
			echo ('<script>alert('.$x=$row['nombreHijo'].'</script>');
			$this->idUsuario=$row['idUsuario'];
			$this->nombreHijo=$row['nombreHijo'];
			$this->edad=$row['edad'];
			$this->fechaNacimiento=$row['fecha'];
			$this->ciudad=$row['ciudad'];
		}
	}
	
	function getIdHijo()
	 { return $this->idHijo;} 	
	function getNombreHijo()
	 { return $this->nombreHijo;}
	 function getEdad()
	 { return $this->edad;}
	function getFechaNacimiento()
	 { return $this->fechaNacimiento;}
	function getCiudad()
	 { return $this->ciudad;}

		// metodos que setean los valores
	function setNombreHijo($val)
	 {  $this->nombreHijo=$val;}
	 function setEdad($fechaNacimiento)
	 {  $this->edad=calculaedad($fechaNacimiento);}
	function setFechaNacimiento($val)
	 {  $this->fechaNacimiento=$val;}
	function setCiudad($val)
	 {  $this->ciudad=$val;}


	function calculaedad($fechanacimiento){
		echo "<script>alert('hola')</script>";
	    list($ano,$mes,$dia) = explode("-",$fechanacimiento);
	    $ano_diferencia  = date("Y") - $ano;
	    $mes_diferencia = date("m") - $mes;
	    $dia_diferencia   = date("d") - $dia;
	    if ($dia_diferencia < 0 || $mes_diferencia < 0)
	        $ano_diferencia--;
	    return $ano_diferencia;
		}

    function saveHijos()
    {
        if($this->idHijo)
        {$this->updateHijos();}
        else
        {$this->insertHijos();}

    }

	private function updateHijos()	// actualiza el cliente cargado en los atributos
	{
			$obj_usuarios=new sQuery();
			    	var_dump($this->nombreHijo);

			$query="UPDATE hijos SET nombreHijo='$this->nombreHijo', edad='$this->edad',fecha='$this->fechaNacimiento',ciudad='$this->ciudad' WHERE idHijo = $this->idHijo AND idUsuario=$this->idUsuario";
			$obj_usuarios->executeQuery($query); // ejecuta la consulta para traer al cliente 

			return $obj_usuarios->getAffect(); // retorna todos los registros afectados
	
	}
	private function insertHijos()	// inserta el cliente cargado en los atributos
	{
			$obj_usuarios=new sQuery();
			$query="INSERT INTO hijos(idUsuario,nombreHijo, edad, fecha,ciudad)VALUES('$this->idUsuario,'$this->nombreHijo', '$this->edad','$this->fechaNacimiento','$this->ciudad')"or die(mysql_error);
			
			$obj_usuarios->executeQuery($query); // ejecuta la consulta para traer al cliente 
			return $obj_usuarios->getAffect(); // retorna todos los registros afectados
	
	}	
	function deleteHijos()	// elimina el cliente
	{
			$obj_usuarios=new sQuery();
			$query="DELETE FROM hijos WHERE idHijo=$this->idHijo AND idUsuario=$this->idUsuario";
			$obj_usuarios->executeQuery($query); // ejecuta la consulta para  borrar el cliente
			return $obj_usuarios->getAffect(); // retorna todos los registros afectados
	
	}	
	
}
function cleanString($string)
{
    $string=trim($string);
    $string=mysql_escape_string($string);
	$string=htmlspecialchars($string);
	
    return $string;
}