<?php
	session_start();
	include "config.php";
	foreach ($_POST as $key => $value) {
		if(!is_array($_POST[$key])){
			$_POST[$key] = htmlspecialchars($value);
		}
	}
	foreach ($_GET as $key => $value) {
		$_GET[$key] = htmlspecialchars($value);
	}

	$path = ltrim($_SERVER['REQUEST_URI'], '/'); 

	$elements = explode('/', $path);  
	$nr = count($elements);
	$pagina = $elements[$nr-1];
	$content_pagina=explode('?', $pagina);  
	$pagina=$content_pagina[0];

	include "route.php";
?>