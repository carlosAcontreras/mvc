<?php namespace Core;
#SI NO ESTADA DEFINIDA LA CONTANTE NO EL ACCESO AL ARCHIVO
defined ("PATCH") or die ("Acceso Denegado");


class App{

	private $controller;
	private $method;
	private $params=[];
	private $url;
	const CONTROLLER = "App\Controllers\\";
	const CONTROLLER_RUTA = "App/Controllers/";

	public function __construct(){
		$this->parseUrl();
		$this->setController();
		$this->setMethod();
		$this->setParams();
		$this->router();
	}

	public function parseUrl(){
		$this->url = explode("/",filter_var(rtrim(URI,"/"),FILTER_SANITIZE_URL));
		$this->url = array_filter($this->url);
		$this->url = array_slice($this->url,1);
	}

private function setController(){
		isset($this->url[0]) ? $this->controller = $this->url[0] : $this->controller = "Home";
		unset($this->url[0]);
		$this->controller = ucfirst(strtolower($this->controller))."Controller";

	}

	private function setMethod(){
		empty($this->url[1]) ? $this->method= "index" : $this->method= $this->url[1] ;
		unset($this->url[1]);
		$this->method = strtolower($this->method);
	}

	private function setParams(){
		$this->params = $this->url ? array_values($this->url) : $this->params;
	}

	public function router(){
		$ruta = self::CONTROLLER_RUTA . $this->controller .".php";
		if(file_exists($ruta)){
			require_once $ruta;
			$fullclass = self::CONTROLLER.$this->controller;
			$controller = new $fullclass;
			if(method_exists($controller,$this->method)){
				if(!empty($this->params)){
					$controller->{$this->method}($this->params);
				}else{
					$controller->{$this->method}();
				}
				
			}else{
				require_once ERROR ;
			}

		}else{
			require_once ERROR ;
		}

	}
}

