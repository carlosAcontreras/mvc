<?php namespace App\Controllers;
#SI NO ESTADA DEFINIDA LA CONTANTE NO EL ACCESO AL ARCHIVO
defined ("PATCH") or die ("Acceso Denegado");

use Core\View,
	Core\Controller,
	App\Models\ContactoModel;

class ContactoController extends Controller{

	public function __construct(){
		parent::__construct();
	}
	public function index($array =[]){
		$this->view->tittle = "CONTACTO";
		$this->view->render("header");
		$this->view->render("Contacto/index");
		$this->view->render("footer");
	}
}