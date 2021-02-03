<?php

$age = 28;
$gender = "homme";

if ($age >= 18) {
    if ($gender === "femme") {
        echo "Vous êtes majeur et une femme";
    } else {
        echo "Vous êtes majeur et un homme";
    }
} else {
    if ($gender === "homme") {
        echo "Vous êtes mineur et un homme";
    } else {
        echo "Vous êtes mineur et une femme";
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

</body>

</html>