<?php

$startDate = ""; //création de variable vide
$endDate="";

  // je fais une condition pour savoir si la variable lastname existe dans $_GET, si oui je fais un echo.
  if(isset($_GET["startDate"])&& isset($_GET["endDate"])){
    $startDate = $_GET["startDate"];
    $endDate = $_GET["endDate"];

  }
?>

<!doctype html>
<html lang="Fr">
  <head>
    <title>Partie 6 exercice 1</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  </head>
  <body>
    <div class="container text-center">
    <a type="button" href="http://exo.php/Exo-6/exo3.php?startDate=01/09/2019&endDate=17/03/2020" class="btn btn-primary mt-5">Envoie des parametres</a>
    <a type="button" href="http://exo.php/Exo-6/exo3.php" class="btn btn-danger mt-5 ">Retour index</a>  
   </div>
    <div class="container text-center bg-light m-2">
      <p><?= $startDate ?></p>
      <p><?= $endDate ?></p>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>