<?php

function load_model($class_name){
  $path_to_file = str_replace("PhpOffice", "", dirname(__FILE__)) . str_replace("\\", "/", $class_name) . ".php";
	try{
		include $path_to_file;
	}
	catch(Exception $e){
		echo "error during loading";
	}
}

spl_autoload_register("load_model");
?>
