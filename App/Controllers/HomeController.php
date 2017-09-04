<?php namespace App\Controllers;
#SI NO ESTADA DEFINIDA LA CONTANTE NO EL ACCESO AL ARCHIVO
defined ("PATCH") or die ("Acceso Denegado");

use Core\View,
	Core\Controller,
	App\Models\ContactoModel;

class HomeController extends Controller{

	public function __construct(){
		parent::__construct();
	}
	public function index($id){
		$datos = ContactoModel::getAll();
		$this->view->datos = $datos;
		$this->view->tittle = "HOME";
		$this->view->render("header");
		$this->view->render("Home/index");
		$this->view->render("footer");
	}
}