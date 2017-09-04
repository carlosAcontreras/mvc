<?php 
define ("PATCH", dirname (__FILE__));
require_once "App/Config/Config.php";
require_once "Core/autoload.php";

use App\Controllers\HomeController,
	App\Controllers\ContactoController,
	Core\App;
	
$app = new App();
