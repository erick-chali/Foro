<?php
	//iniciar sesion
	session_start();
	//para que las clases se llamen automaticamente
	
	//incluir configuracion
	require_once('config/config.php');
	
	//helpers
	require_once('helpers/system_helper.php');
	require_once('helpers/format_helper.php');
	require_once('helpers/db_helper.php');
	
	//auto cargador de clases
	function __autoload($class_name){
		require_once ('libraries/'.$class_name.'.php');
		
	}
