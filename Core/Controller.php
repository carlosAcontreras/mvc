<?php namespace Core;

defined("PATCH")  or die ("Acceso Denegado");

use Core\View,
	App\Models\ContactoModel;

class Controller{
	protected $view;
	protected $model;

	public function __construct(){
		$this->view = new View;
		#$this->model = new ContactoModel;
	}
}