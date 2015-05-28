<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  </head>
    <body>
          <?php
              $veza = new PDO("mysql:dbname=fashionblog;host=127.11.112.2;charset=utf8", "admin1XHlxGM", "3JSla63s9yfj");
              $id = $_GET['id'];
              $veza->exec("set names utf8");
              $stmt = $veza->prepare("select id, UNIX_TIMESTAMP(datum) datum2, autor, naslov, slika, tekst, detaljniTekst, kategorija from novost where id=:id");
              $stmt->bindParam(":id", $id);
              $stmt->execute();
              while($novost = $stmt->fetch()) {
                  $datum3=date("d.m.Y. H:i:s",$novost["datum2"]);
                  $naslov2=ucfirst(strtolower($novost["naslov"]));
                  print "<div class=\"novost\">";
                  print "<p>$datum3</p>";
                  print "<p>{$novost["autor"]}</p>";
                  print "<h4>$naslov2</h4>";
                  print "<img src=\"{$novost["slika"]}\" alt=\"slika\" width=700><br>";
                  print "{$novost["tekst"]}<br>";
                  print "{$novost["detaljniTekst"]}<br>";
                  print "</div>";
              }   
    ?>
  </body>
</html> 