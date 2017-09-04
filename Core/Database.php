<?php
namespace Core;

defined ("PATCH") or die ("Acceso Denegado");

class Database{

	private static $conexion;

	protected static function conectar(){
		if(!isset(self::$conexion)){
			try {
				self::$conexion = new \PDO ("mysql:host=localhost;dbname=Construintegrales;","root","");
				self::$conexion->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
				self::$conexion->exec("SET CHARACTER SET utf8");
				return self::$conexion;

			} catch (\PDOException $e) {
				echo "error " . $e->getMessage();
				die();
			}
		}
	}

	public static function desconectar(){
		if(isset(self::$conexion)){
			self::$conexion= null;
			echo "conexion cerrada";
		}
	}
}

