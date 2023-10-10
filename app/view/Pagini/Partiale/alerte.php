<?php
	global $ok;
	if(isset($ok)){
		echo "
			<div class='alert alert-success alert-dismissible fade show alerta_scc'>
				<button type='button' class='close' data-dismiss='alert' id='btn_close'>&times;</button>
				<strong>Success!</strong> Contul tau a fost editat cu succes!
			</div>
		";
	}
?>