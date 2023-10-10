
<div id="mySidenavOrdonat" class="sidenav" style="float:left;">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNavOrdonat()">&times;</a>
  <a href="<?php echo BASE_URL;?>index.php/view_note_elev_noi">Vezi cele mai noi</a>
  <a href="<?php echo BASE_URL;?>index.php/view_note_elev_vechi">Vezi cele mai vechi</a>
  <a href="<?php echo BASE_URL;?>index.php/view_note_elev_cresc">Vezi crescator</a>
  <a href="<?php echo BASE_URL;?>index.php/view_note_elev_descresc">Vezi descrescator</a>
</div>
<div id="mySidenavFiltrat" class="sidenav" style="float: left;">
  	<a href="javascript:void(0)" class="closebtn" onclick="closeNavFiltrat()">&times;</a>
	<aside class="optiune optiune_ascunsa">
		<?php echo "<a href='".BASE_URL."index.php/view_note_filtrate?id=9'>Note peste 9</a>"; ?>
	</aside>
	<aside class="optiune optiune_ascunsa">
		<?php echo "<a href='".BASE_URL."index.php/view_note_filtrate?id=8'>Note peste 8</a>"; ?>
	</aside>
	<aside class="optiune optiune_ascunsa">
		<?php echo "<a href='".BASE_URL."index.php/view_note_filtrate?id=7'>Note peste 7</a>"; ?>
	</aside>
	<aside class="optiune optiune_ascunsa">
		<?php echo "<a href='".BASE_URL."index.php/view_note_filtrate?id=6'>Note peste 6</a>"; ?>
	</aside>
	<aside class="optiune optiune_ascunsa">
		<?php echo "<a href='".BASE_URL."index.php/view_note_filtrate?id=5'>Note peste 5</a>"; ?>
	</aside>
	<aside class="optiune optiune_ascunsa">
		<?php echo "<a href='".BASE_URL."index.php/view_note_filtrate?id=4'>Note sub 5</a>"; ?>
	</aside>
</div>