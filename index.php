<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Comment</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

<?php

$conn = new mysqli("localhost", "root", "", "commentaire");



$comnt = $_POST['comnt'];
$date = time();
$sql = "INSERT INTO comment (comnt) VALUES ($comnt)";
$result = mysqli_query($conn, $sql);


$getcmnt = "SELECT * FROM comment";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<div class='alert alert-success' role='alert'>". $comnt ."</div>";
  }


Var_dump($comnt) ;
 ?>
  <form method="post">
    <div class="form-group comment">
      <label for="area">Comment</label>
      <textarea class="form-control" id="area" rows="3" name="comnt"></textarea>
      <button class="btn btn-success send" type="submit" name="button">comment</button>
    </div>
  </form>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
  </body>
</html>
