<?php include("funkcije.php") ?>
<div id="podstranice">
	<h3>Trends</h3>
	<div class="novost">
		<?php foreach(procitajSveNovosti("trends") as $novost) { ?>
					<?php include("novost.php") ?>	
				<?php } ?>
	</div>
</div>
