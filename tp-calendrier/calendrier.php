<?php
// Réglage timezone car par défaut, renvoie GMT
date_default_timezone_set("Europe/Paris");
// Réglage caractères spéciaux
setlocale(LC_ALL, "fr.UTF-8");


// tableau des jours, tableau des mois...
$days = ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"];
$months = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"];

// Détermination des 1er et dernier jours du mois et du nb de jours dans le mois
if (isset($_GET["months"]) && isset($_GET["years"])) {
    $month = array_search($_GET["months"], $months) + 1;
    $year = $_GET["years"];
    $daysss = cal_days_in_month(CAL_GREGORIAN, $month, $year);
    // Utilisation de intval pour convertir la string en int et ainsi la soustraire à 1 (supp du décalage de 1j du au tableau qui commence à 0)
    $firstDay = intval(strftime("%u", strtotime($month . "/01/" . $year))) - 1;
    $lastDay = intval(strftime("%u", strtotime($month . "/" . $daysss . "/" . $year))) - 1;
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="assets/style.css" rel="stylesheet">
    <title></title>
</head>

<body>
    <!-- Pour crée le titre qui affiche le mois et l'année selectionnés -->
    <?php
    if (isset($_GET["months"]) && isset($_GET["years"])) {
    ?>
        <h1 class="text-center p-5"><?= $_GET["months"] . " " . $_GET["years"] ?></h1>
    <?php
    }
    ?>

    <!--tableau -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <?php
                // boucle days = day 
                foreach ($days as $day) {
                    echo "<th class='text-center' style='width: 14.28%;'>$day</th>";
                }
                ?>
            </tr>
        </thead>

        <tbody>
            <tr>
                <?php
                // $getDays + $getFirstDay pour trouver le nombre de cases libres avant le 1er jour 
                // (6 - $getLastDay) pour trouver le nombre de cases vides après le dernier jour
                for ($day = 1; $day <= $daysss + $firstDay + (6 - $lastDay); $day++) {
                    // 1 divisé par 7 correspond au 1er jour du mois sur le tableau 
                    if ($day % 7 == 1) {
                        echo "<tr>";
                    }
                    // Pour crée les cases avec les jours
                    if ((($day - $firstDay) > 0) && ($day - $firstDay <= $daysss)) {
                        echo "<td class='pb-5'>" . ($day - $firstDay) . "</td>";
                    } else {
                        echo "<td class='table-dark'></td>";
                    }
                }
                ?>
            </tr>
        </tbody>
    </table>
<!-- fin du tableau -->
    <a href="index.php"><button class="btn btn-dark" id="btn" type="submit">Retour à la selection</button></a>
</body>

</html>