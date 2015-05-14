<?php 
	include("funkcije.php");
	$folder = ocistiPutanju($_GET["folder"]);
	$file = ocistiPutanju($_GET["file"]);

	if (empty($folder) || empty($file)) {
		die("Parametri nisu validni.");
	}

	$novost = procitajNovost($folder, $file);
?>
<div class="novost">
	<p><?= $novost["datum"]->format(VRIJEME_FORMAT) ?></p>
	<p><?= $novost["autor"] ?></p>
	<h4><?= $novost["naslov"] ?></h4>
	<img src="<?= $novost["slika"] ?>" ALT="homePhoto1" width=700>
	<?= $novost["tekst"] ?>
	<br>

	<?= $novost["detaljniTekst"] ?> 
</div>