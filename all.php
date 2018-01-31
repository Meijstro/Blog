<!DOCTYPE html>
<?php include("database.php") ?>
<head>
<title></title>
<link rel="stylesheet" href="blog.css">
<script type="text/javascript" src=""></script>
</head>
<body>

  <div class="categorieen">
    <h2 class="header2">Kies een categorie</h2>
  <ul class="ul">
    <li><a href="all.php">All</a></li>
    <li><a href="fcgroningen.php">FC Groningen</a></li>
    <li><a href="cryptovaluta.php">Cryptovaluta</a></li>
    <li><a href="trump.php">Trump</a></li>
  </ul>

  <div class="bericht" id="all">
  <?php

  // use data from the database
  $sql=mysqli_query("SELECT user, message FROM list");

  // show it on the page
  

  ?>
  </div>
  </div>

</body>
</html>
