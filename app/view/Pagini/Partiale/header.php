			<!-- Icon din title-bar-->
	<link rel="icon" type="icon/x-image" href="<?php echo BASE_URL;?>view/Surse_imag/sigla.png">
					<!-- Linkurile pentru CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>view/Surse_css/stil_alerte.css">
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>view/Surse_css/stil_butoane.css">
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>view/Surse_css/stil_carusel.css">
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>view/Surse_css/stil_eroare.css">
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>view/Surse_css/stil_form_intro.css">
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>view/Surse_css/stil_formulare_de_intrare.css">
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>view/Surse_css/stil_general.css">
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>view/Surse_css/stil_left_menu.css">
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>view/Surse_css/stil_meniu_panou.css">
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>view/Surse_css/stil_panou_sign_up.css">
					<!-- Linkurile pentru Bootstrap -->
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>libraries/bootstrap/css/bootstrap.min.css">
	<script src="<?php echo BASE_URL;?>libraries/jquery/jquery.min.js"></script>
	<script src="<?php echo BASE_URL;?>libraries/bootstrap/js/bootstrap.min.js"></script>					
					<!-- Functii pentru left menu -->
	<script>
	function openNav() {
	  document.getElementById("mySidenav").style.width = "20%";
	  document.getElementById("main").style.marginLeft = "20%";
	}

	function closeNav() {
	  document.getElementById("mySidenav").style.width = "0";
	  document.getElementById("main").style.marginLeft= "0";
	}
	function openNavFiltrat() {
	  document.getElementById("mySidenavFiltrat").style.width = "20%";
	}

	function closeNavFiltrat() {
	  document.getElementById("mySidenavFiltrat").style.width = "0";
	}
	function openNavOrdonat() {
	  document.getElementById("mySidenavOrdonat").style.width = "20%";
	}

	function closeNavOrdonat() {
	  document.getElementById("mySidenavOrdonat").style.width = "0";
	}
	</script>
	<style>
	canvas{
		-moz-user-select: none;
		-webkit-user-select: none;
		-ms-user-select: none;
	}
	</style>