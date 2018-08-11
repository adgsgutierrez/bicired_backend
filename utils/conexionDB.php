<?php
/**
 * Esta clase es la encargada de generar las conexiones a la base de datos y cualquier tipo de consulta
 * @author  Aric Gutierrez
 * @date 22 Nov 2017
 * @version 1.0
 **/
class ConexionDB {

  private $link;
  private $log;
	
  public static function consultar($string){
	   //Guardando en log SQL
	    $log = new Log();
	    $log->sql();
	    $log->insert('Consultando el sql ['.$string.']', 'conexionDB.php');
    	// Conectando al servidor de Base de datos
    	$server = Constante::SERVIDOR_DB;
		$link = new mysqli($server, Constante::USUARIO_DB, Constante::CLAVE_DB , Constante::BASE_DATOS);
		$link->set_charset("utf8");
	
		$result = $link->query($string);
		//copiando los datos para retornarlos
		$datos = $result;
		//returnando el resultado
		return $datos;
  }
}
 ?>
