<?php include("funkcije.php") ?>
<div id="podstranice">
	<h3>3 ways to wear</h3>
	<div class="novost">
		<?php foreach(procitajSveNovosti("novosti\\wear") as $novost) { ?>
					<?php include("novost.php") ?>	
				<?php } ?>
	</div>
	
</div>
		