
		<aside class="galerie_opt_elev">
			<a href="#" target="_top">
				<img src="<?php echo BASE_URL;?>/view/Surse_imag/Optiuni_cont/Optiuni_cont_elev/chat.jpg" alt="Intra in chat" class="img_cont">
				<div class="descriere">Intra in chat!</div>
			</a>
		</aside>
		<?php
	if(!array_key_exists('nume_cont', $_SESSION)||!array_key_exists('tip_cont',$_SESSION)||!array_key_exists('id_cont_prof', $_SESSION)){
		redirect('view_log_in_general');
		exit();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Chat</title>
	<?php
		include_once "view/Pagini/Partiale/header.php";
	?>
	<script src="<?php echo BASE_URL;?>libraries/angular/angular.min.js"></script>
</head>
<body>
	<?php
		include_once "view/Pagini/Partiale/antet_prof.php";
		include_once "view/Pagini/Partiale/meniu_prof.php";
	?>
	<div style= "text-align:center;">
		<h1 style=" font-size: 2vw;">
			<a href="<?php echo BASE_URL;?>index.php/view_panou_prof">
				&#8810;
			</a>  Chat
		</h1>
	</div>
	<script src="<?php echo BASE_URL;?>view/Surse_js/chat.js"></script>
	<div ng-app=" ">
		<input type="text" ng-model="name">
		<h1>{{name}}</h1>
		<!-- ng-app="chatApp" ng-controller="chatCtrl"
		<div ng-repeat="x in mesaje">
			{{x.ID_User}}
		</div>
	-->
	{{x}}
	</div>
</body>
</html>