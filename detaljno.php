<?php include("funkcije.php") ?>
<?php $novost = procitajNovost("novosti\\home\\" . $_GET["file"] . ".txt"); ?>
<div class="novost">
	<p><?= $novost["datum"]->format(VRIJEME_FORMAT) ?></p>
	<p><?= $novost["autor"] ?></p>
	<h4><?= $novost["naslov"] ?></h4>
	<img src="<?= $novost["slika"] ?>" ALT="homePhoto1" width=700>
	<?= $novost["tekst"] ?>
	<br>

	<?= $novost["detaljniTekst"] ?> 
</div>