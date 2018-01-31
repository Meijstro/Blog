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

   echo "<b>".$_POST["blogger"]."</b>". " ";
   echo date("(j F Y h:i)");
   echo "<br>"."<br>";
   echo $_POST["bericht"];
   echo "<hr>";


    ?>
 </div>
</div>

</body>
</html>
