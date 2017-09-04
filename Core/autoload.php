<?php

function autoload($class){
	$ruta = str_replace("\\", "/", $class).".php";
	if(file_exists($ruta)){
		require_once $ruta;
	}
}

spl_autoload_register("autoload");