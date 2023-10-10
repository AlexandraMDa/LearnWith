<header>
	<a href="<?php echo BASE_URL;?>index.php" id="head">LearnWith</a>
</header>
<a href="<?php echo BASE_URL;?>index.php/form_send_image_elev">
	<?php if (file_exists("view/Surse_imag/Conturi/conturi_elev/".$_SESSION['id_cont_elev'].".jpg")){ ?>
		<img data-tippy-content="Tooltip" src="<?php echo BASE_URL;?>/view/Surse_imag/Conturi/conturi_elev/<?php echo $_SESSION['id_cont_elev'];?>.jpg" style="width: 7%;" id='menu_panou' 
	class='img_panouri img_cont img_send_img'>
		<?php }else{ ?>
		<img data-tippy-content="Tooltip" src="<?php echo BASE_URL;?>/view/Surse_imag/Panouri/student.png" style="width: 7%;" id='menu_panou' 
	class='img_panouri img_cont img_send_img'>
		<?php } ?>
	<div class="text_img_cont">Send image!</div>
</a>
<?php
	include_once "model/functii_get_data.php";
	$user = get_data_elev($_SESSION['id_cont_elev']);
?>
<div style="text-align: center; padding-right: 4%; font-family: Arial; font-size: 1.2vw;">
	Salut, <?php 
		echo "<strong>".$user[0]['Nume']." ".$user[0]['Prenume']."</strong>!";
	?>
</div>
<div style="text-align: center; padding-right: 4%; font-family: Arial; font-size: 1vw;">
	<?php 
		echo "Elev in clasa ".$user[0]['Nume_clasa'];
	?>
</div>