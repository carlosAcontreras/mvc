<?php 
#ruta de uri 
define ("URI", $_SERVER["REQUEST_URI"]);

#ruta de app
define ("URL", "http://127.0.0.1/FRAMEWORK/");
#ruta de css
define ("CSSPATCH", URL . "public/css/");
#ruta de js
define ("JSPATCH", URL . "public/js/");
#ruta de 404
define ("ERROR","App/Views/Error/index.php");

define ("DATABASE", "../../Core/Database.php");

