<?php

var_dump($_POST);

if (isset($_POST['lastname']) && isset($_POST['firstname'])) {
    if (preg_match('/^[a-zA-Z][a-zéèàêâùïüë]+$/', $_POST['lastname'])) {
        $lastname = htmlspecialchars($_POST['lastname']);
    } else {
        $messageErrorLastname = 'Veuillez renseigner correctement le champ';
    }
    if (preg_match('/^[a-zA-Z][a-zéèàêâùïüë]+$/', $_POST['firstname'])) {
        $firstname = htmlspecialchars($_POST['firstname']);
    } else {
        $messageErrorFirstname = 'Veuillez renseigner correctement le champ';
    }
} else {
    $lastname = 'Non défini';
    $firstname = 'Non défini';
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Exo 5</title>
</head>

<body>

    <form action="exo5.php" method="POST" class="container">
        <div>
            <label for="gender">Votre civilité :</label>
            <select class="custom-select">
                <option selected>Choisir :</option>
                <option value="1">Madame</option>
                <option value="2">Monsieur</option>
            </select>
        </div>

        <div class="form-group">
            <label for="lastname">Votre nom :</label>
            <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Nom">
        </div>

        <div class="form-group">
            <label for="firstname">Votre prénom :</label>
            <input type="text" name="firstname" id="firstname" class="form-control" placeholder="Prénom">
        </div>

        <button type="submit" class="btn btn-primary">Envoyer</button>
        <!-- <button type="submit" class="btn btn-danger">Retour index</button> -->
    </form>
    
    <p>Votre genre est : <?= $gender ?></p>
    <p>Votre nom est : <?= $lastname ?></p>
    <p>Votre prénom est : <?= $firstname ?></p>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>