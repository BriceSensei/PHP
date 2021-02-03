<?php
if(isset($_POST["firstname"]) && isset($_POST["lastname"])){
    if(preg_match("/^[a-zA-Z]+$/", $_POST["firstname"])){
        $firstname = htmlspecialchars($_POST["firstname"]);
    } else {
        $messageErrorFirstname = "Veuillez renseigner correctement le champ";
    }
    if(preg_match("/^[a-zA-Z]+$/", $_POST["lastname"])){
        $lastname = htmlspecialchars($_POST["lastname"]);
    } else {
        $messageErrorLastname = "Veuillez renseigner correctement le champ";
    }
} else {
    $firstname = "Non défini";
    $lastname = "Non défini";
}
?>
<!doctype html>
<html lang="fr">
  <head>
    <title>PHP Partie 7</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <form action="index.php" method="POST">
        <label for="firstname">Prénom :</label>
        <input type="text" name="firstname" id="firstname">
        <?= isset($messageErrorFirstname) ? "<p class=\"text-red\">" . $messageErrorFirstname . "</p>" : "" ?>
        <label for="lastname">Nom de famille :</label>
        <input type="text" name="lastname" id="lastname">
        <?= isset($messageErrorLastname) ? "<p class=\"text-red\">" . $messageErrorLastname . "</p>" : "" ?>
        <button type="submit">Envoyer</button>
    </form>

    <p>Votre prénom est : <?= $firstname ?></p>
    <p>Votre nom de famille est : <?= $lastname ?></p>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>