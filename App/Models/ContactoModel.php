<?php namespace App\Models;

defined ("PATCH") or die ("Acceso Denegado");

use Core\Database;


class ContactoModel extends Database{

	public static function getAll(){
		$connection = Database::conectar();
		$sql = "SELECT * FROM user";
 		$query = $connection->prepare($sql);
 		$query->execute();
 		$respuesta =  $query->fetchAll();
 		return $respuesta;
	}

	public static function getById($id){
		$connection = Database::conectar();
		$sql="SELECT * FROM user where id=:id";
		$consulta = $connection->prepare($sql);
		$consulta->bindParam("id",$id);
		$consulta->execute();
		$respuesta = $consulta->fetch();

		return$respuesta;
	}
}
