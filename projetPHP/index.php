<?php
$message = "";
$messageSecond = "";
$messageOk = "";
$messageNoFormat = "";

// Vérifie la taille du fichier - 1Mo maximum
$maxsize = 1000000;
// Vérifie si le fichier a été uploadé sans erreur.
if (isset($_FILES["fileToUpload"]) && $_FILES["fileToUpload"]["error"] == 0) {
    $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
    $filename = $_FILES["fileToUpload"]["name"];
    $filetype = $_FILES["fileToUpload"]["type"];
    $filesize = $_FILES["fileToUpload"]["size"];

    // pour ne pas upload un ficher ou le format serait modifier.
    if (
        mime_content_type($_FILES["fileToUpload"]["tmp_name"]) == "image/jpeg" ||
        mime_content_type($_FILES["fileToUpload"]["tmp_name"]) == "image/gif" ||
        mime_content_type($_FILES["fileToUpload"]["tmp_name"]) == "image/png"
    ) {


        // Vérifie l'extension du fichier
        $extension = pathinfo($filename, PATHINFO_EXTENSION);
        // si l'extension n'existe pas dans le tableau
        if (!array_key_exists($extension, $allowed)) {
            // echo 'Erreur : Veuillez sélectionner un format de fichier valide.';
            $message = 'Erreur : Veuillez sélectionner un format de fichier valide.';
        } else if ($filesize > $maxsize) {
            // echo 'Error: La taille de l\'image est supérieure à la limite autorisée.';
            $messageSecond = 'Error: La taille de l\'image est supérieure à la limite autorisée.';
        } else if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "img/" . uniqid() . $_FILES["fileToUpload"]["name"])) {
            // echo'Le fichier ' . $filename . ' a bien été uploadé.';
            $messageOk = 'Le fichier ' . $filename . ' a bien été uploadé.';
        }
    } else {
        $messageNoFormat = 'Erreur : Mr Mime #122 !!.';
    }
}


if (count(scandir('img/')) > 0) {
    $number = count(scandir('img/')) - 2;
} else {
    $number = 0;
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css">
    <title>TD Upload Fichier</title>
</head>

<body>


    <canvas id="c"> </canvas>


    <div class="container">




        <form action="index.php" method="POST" enctype="multipart/form-data" class="mt-5">


            <h2 class="text-center pb-4">Upload Image</h2>

            <div class="form-group">
                <label class="form-label" for="fileToUpload" id="Choix">Choisissez votre image :</label>
                <input type="file" name="fileToUpload" id="fileToUpload" class="form-control">
            </div>


            <div class="form-group mt-3 text-center">
                <!-- <input type="submit" name="submit" value="Envoyer"> -->
                <button type="submit" name="submit" class="btn" id="bouton">Upload</button>

                <a href="gallerie.php" type="submit" class="btn" id="bouton">Gallerie <?= $number ?> </a>

                <?= (!empty($message))  ? " <p class='messagePHP'>  $message  </p>" : "" ?>

                <?= (!empty($messageSecond)) ? " <p class='messagePHP'>  $messageSecond  </p>" : "" ?>

                <?= (!empty($messageOk)) ? " <p class='messagePHP'>  $messageOk  </p>" : "" ?>

                <?= (!empty($messageNoFormat)) ? " <p class='messagePHP'>  $messageNoFormat  </p>" : "" ?>



            </div>

            <p class="note note-danger"><strong>Note:</strong> Seuls les formats .jpg, .jpeg, .jpeg, .gif, .png sont autorisés jusqu'à une taille maximale de 1 Mo.</p>

        </form>

        <img id="imgPreview">

    </div>


    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>

    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>

    <script src="assets/script.js"></script>

</body>

</html>