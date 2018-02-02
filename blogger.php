<!DOCTYPE html>
<?php include("database.php") ?>
<head>
<title></title>
<link rel="stylesheet" href="blog.css">
<script src=""></script>
</head>
<body>
  <div class="categorieen">
    <h2 class="header2"> Categorie </h2>
  <select class="dropdown" onchange="">
				<option value="fcgroningen">FC Groningen</option>
				<option value="cryptovaluta">Cryptovaluta</option>
				<option value="trump">Trump</option>
  </select>
<br> <br>
<form class="form" action="blog.php" method="POST">
  <h2 class="header2"> Blogger: </h2>
  <input id="blogger" type="text" name="blogger" required><br>
  <h2 class="header2"> Bericht: </h2>
  <textarea id="bericht" type="text" name="bericht" required></textarea>
  <input id="button" type="submit" value="Verzenden">
</form>
</div>


</body>
</html>
