<?php include("funkcije.php") ?>
<div id="podstranice">
	<h3>Beauty</h3>
	<div class="novost">
		<?php foreach(procitajSveNovosti("novosti\\beauty") as $novost) { ?>
					<?php include("novost.php") ?>	
				<?php } ?>
	</div>
</div>
		