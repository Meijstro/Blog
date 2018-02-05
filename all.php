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
  <form class="form" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
    <h2 class="header2"> Zoek op blogger </h2>
    <input id="blogger" type="text" name="blogger" required><br><br>
    <input id="button" type="submit" name= "button2" value="Search">
  </form>

  <div class="bericht" id="all">
  <?php
  //when search function used show specific data
  if (isset($_POST['button2'])) {
            $name = $_POST['blogger'];


  // use data from the database and show it
  $sql= "SELECT * FROM list WHERE user = '$name' ORDER BY timestamp DESC;";
  $result= mysqli_query($connection,$sql);
  while($row= mysqli_fetch_assoc($result))
  {
  echo "<br>"."<b>".$row["user"]."</b>"." "."<span>".$row["timestamp"].
  "</span>"."<br>"."<br>"."&nbsp;&nbsp;".$row["message"]."<hr>";
  }
}
else{

  // use data from the database and show it
  $sql= "SELECT * FROM list ORDER BY timestamp DESC;";
  $result= mysqli_query($connection,$sql);
  while($row= mysqli_fetch_assoc($result))
  {
  echo "<br>"."<b>".$row["user"]."</b>"." "."<span>".$row["timestamp"].
  "</span>"."<br>"."<br>"."&nbsp;&nbsp;".$row["message"]."<br>"."<br>".
  '<form class="form" action="".php method="POST">'.
  '<textarea id="comment1" name="comment" rows="4" cols="80"></textarea>'.
  '<input id="button" type="submit" value="Reageer">'."</form>"."<hr>";
  }
}

$comment=$_POST["comment"];
$sql="INSERT INTO list2(comments) VALUES ('$comment')";
$result= mysqli_query($connection,$sql);

  ?>
  </div>
  </div>

</body>
</html>
