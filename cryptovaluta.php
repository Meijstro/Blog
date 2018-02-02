<!DOCTYPE html>
<?php include("database.php") ?>
<head>
<title></title>
<link rel="stylesheet" href="blog.css">
<script type="text/javascript" src=""></script>
</head>
<body>

  <div class="categorieen">
    <h2 class="header2">Zoek op categorie</h2>
  <ul class="ul">
    <li><a href="all.php">All</a></li>
    <li><a href="fcgroningen.php">FC Groningen</a></li>
    <li><a href="cryptovaluta.php">Cryptovaluta</a></li>
    <li><a href="trump.php">Trump</a></li>
  </ul>
  <form class="form" action="search.php" method="POST">
    <h2 class="header2"> Zoek op blogger </h2>
    <input id="blogger" type="text" name="blogger" required><br><br>
    <input id="button" type="submit" value="Search">
  </form>

  <div class="bericht" id="cryptovaluta">
   Cryptogeld is "geld" in de vorm van een bedrag in cryptovaluta,
   of – met een Engels woord – cryptocurrency. Dit laatste is een
   soort digitale munteenheid, die vaak gebruikt wordt als alternatief
   geldsysteem voor de reguliere geldsoorten.
  </div>

  </div>

</body>
</html>
