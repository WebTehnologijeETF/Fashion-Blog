<?php
	define("VRIJEME_FORMAT", "d.m.Y. H:i:s");

	function procitajNovost($file) {
		$handle = fopen($file, "r");
		if ($handle) {
			$linije = array();
	    	while (($line = fgets($handle)) !== false) {
				array_push($linije, $line);
	    	}
	    	fclose($handle);

	    	$datum = $linije[0];
	    	$autor = $linije[1];
	    	$naslov = $linije[2];
	    	$slika = $linije[3];
	    	$tekst = "";
	    	$detaljniTekst = null;

	    	$imaDetaljno = false;
	    	$i = 4;
	    	for(; $i < count($linije); $i++) {
	    		if (trim($linije[$i]) === "--") {
	    			$imaDetaljno = true;
	    			break;
	    		}
	    		$tekst .= $linije[$i];
	    	}

	    	if ($imaDetaljno) {
	    		$detaljniTekst = "";
	    		$i++;
				for(; $i < count($linije); $i++) {
		    		$detaljniTekst .= $linije[$i];
		    	}
	    	}
			
			$datum = date_create_from_format(VRIJEME_FORMAT, trim($datum));

	    	return array(
	    		"datum" => $datum,
	    		"autor" => $autor,
	    		"naslov" => ucfirst(strtolower(trim($naslov))),
	    		"slika" => $slika,
	    		"tekst" => $tekst,
	    		"file" => $file,
	    		"detaljniTekst" => $detaljniTekst
	    	);
		}

		die("Nemoguce otvoriti fajl");
	}

	function sortNovost($a, $b) {
		$t1 = intval($a["datum"]->format("U"));
		$t2 = intval($b["datum"]->format("U"));
		return $t2 - $t1;
	}

	function procitajSveNovosti($folder) {
		$novosti = array();
		foreach(glob($folder . "\\*.txt") as $file) {
			array_push($novosti, procitajNovost($file));
		}

		// sortiraj novosti
		usort($novosti, "sortNovost");

		return $novosti;
	}
?>