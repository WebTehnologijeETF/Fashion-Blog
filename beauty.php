<div id="podstranice">
    <h3>Beauty</h3>
    <div class="novost">
        <?php
            $kategorija = "beauty";
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
</div>