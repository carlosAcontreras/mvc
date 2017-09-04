<?php namespace Core;
defined ("PATCH") or die ("Acceso Denengado");

class View{
	protected static $data=[];
	const PATCH_VIEW = "App/Views/";

	public function render($view){
		$ruta = self::PATCH_VIEW.$view.".php";
		if(file_exists($ruta)){
			require_once $ruta;
		}
	}
}