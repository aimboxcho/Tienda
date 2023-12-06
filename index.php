<?php
session_start();
//Accesso a todos los controladores o clases
require_once 'autoload.php';
require_once 'config/db.php';
require_once 'config/parameters.php';
require_once 'helpers/utils.php';
require_once 'views/layout/header.php';
require_once 'views/layout/sidebar.php';



//Comprobando si existe el controlador a travez de la URL
if(isset($_GET['controller'])){
    $nombre_controlador = $_GET['controller'].'Controller';
}else if (!isset($_GET['controller']) && !isset($_GET['action']))
{
    $nombre_controlador = controller_default;
}
else{
    echo "no existe";
    exit();
}

//Compruebo si existe el metodo en cierto controlador
if(class_exists($nombre_controlador)){	
	$controlador = new $nombre_controlador();
	
	if(isset($_GET['action']) && method_exists($controlador, $_GET['action'])){
		$action = $_GET['action'];
		$controlador->$action();
	}elseif(!isset($_GET['controller']) && !isset($_GET['action'])){
		$action_default = action_default;
		$controlador->$action_default();
	}else{
		echo "no existe";
	}
}else{
	echo "no existe";
}

require_once 'views/layout/footer.php';

?>