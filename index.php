<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Fashion Blog</title>
		<link rel="stylesheet" type="text/css" href="stil.css">
	</head>
	<body>
		<div id="okvir">
			<div id="naslov">
				<h1>EMFASHION</h1>
				<h2><img src="star.png" ALT="star" width=20 height=20> Shine like a star</h2>
			</div>
			<nav>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a onclick="otvori('about.html')">About</a></li>
					<li><a onclick="otvori('contact.html')">Contact</a></li>
					<li id="dropdown"><a href="#">Fashion <span style="font-size: 9px">&#9660;</span></a>
						<ul id="menu">
							<li><a onclick="otvori('fashion.php')">Home</a></li>
							<li><a onclick="otvori('trends.php')">Trends</a></li>
							<li><a onclick="otvori('wear.php')">3 ways to wear</a></li>
							<li><a onclick="otvori('products.html')">Products</a></li>
						</ul>
					</li>
					<li><a onclick="otvori('beauty.php')">Beauty</a></li>
					<li><a onclick="otvori('links.html')">Links</a></li>
				</ul>
			</nav>
			<div id="glavni">
				<?php
					$kategorija = "home";
					$veza = new PDO("mysql:dbname=fashionblog;host=localhost;charset=utf8", "admin7brFusy", "UTkFmQhGANww");
     				$veza->exec("set names utf8");
     				$stmt = $veza->prepare("select id, UNIX_TIMESTAMP(datum) datum2, autor, naslov, slika, tekst, detaljniTekst, kategorija from novost where kategorija=:kategorija order by datum desc");
     				$stmt->bindParam(":kategorija", $kategorija);
     				$stmt->execute();
     		
     				
     				while($novost = $stmt->fetch()) {
     					$datum3=date("d.m.Y. H:i:s",$novost["datum2"]);
     					$naslov2=ucfirst(strtolower($novost["naslov"]));
        				print "<div class=\"novost\">";
        				print "<p>$datum3</p>";
        				print "<p>{$novost["autor"]}</p>";
						print "<h4>$naslov2</h4>";
						print "<img src=\"{$novost["slika"]}\" alt=\"slika\" width=700>";
						print "{$novost["tekst"]}<br>";
						if ($novost["detaljniTekst"]) { 
							print "<a href='#' onclick='otvori(\"detaljnoLink.php?id={$novost["id"]}\")'>View More Details</a><br>";
						}
        				print "</div>";
      				}			
      			?>
			</div>
			<div id="desno">
				<div id="ikone">
					<a href="https://www.facebook.com/?_rdr" target="_blank">
						<img src="facebook.png" ALT="facebook" height=30 width=30>	
					</a>
					<a href="https://twitter.com/" target="_blank">
						<img src="twitter.png" alt="twitter" height=30 width=30>	
					</a>
					<a href="https://instagram.com/" target="_blank">
						<img src="instagram.jpg" alt="instagram" height=30 width=30>
					</a>
				</div>
					<div class="reklama">
						<a href="http://www.harpersbazaar.com/fashion/fashion-week/g4114/new-york-fashion-week-spring-2015/?slide=3" target="_blank">
							<img src="reklama1.jpg" alt="reklama1" width=190>
						</a>
					</div>
					<div class="reklama">
						<a href="http://shop.whowhatwear.com/boutique/boohoo" target="_blank">
							<img src="reklama2.jpg" alt="reklama2" width=190>
						</a>
					</div>
					<div class="reklama">
						<a href="http://four-pins.com/style/popular-fashion-brands-world-right-now/" target="_blank">
							<img src="reklama3.jpg" alt="reklama3" width=190>
						</a>
					</div>
					<div class="reklama">
						<a href="http://www.cosmopolitan.co.uk/fashion/style/advice/a34140/13-pieces-of-clothing-that-look-good-on-everyone/" target="_blank">
							<img src="reklama4.jpg" alt="reklama4" width=190>
						</a>
					</div>
			</div>
			<div id="podnozje">
				<p>Copyright (c) 2015 EMFASHION.ba</p>
			</div>
		</div>
		<script type="text/javascript" src="datoteka1.js"></script>
		<script type="text/javascript" src="datoteka2.js"></script>
		<script type="text/javascript" src="ajax.js"></script>
		<script type="text/javascript" src="proizvodi.js"></script>
	</body>
</html>