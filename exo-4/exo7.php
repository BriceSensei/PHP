<?php 

function genre($genre, $age) {
    if ($genre == 'homme' && $age >= 18){
        return "Vous êtes un homme et vous êtes majeur";
    }else if ($genre == 'homme' && $age < 18) {
        return "Vous êtes un homme et vous êtes mineur";
    }else if ($genre == 'femme' && $age >= 18) {
        return "Vous êtes une femme et vous êtes majeur";
    }else {
        return "Vous êtes un homme et vous êtes mineur";
    }
}
?>



<!doctype html>
<html lang="fr">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

</head>

<body>


<p> <?php echo genre("homme",  14) ?></p>

</body>

</html>