<?php 
function concatString($lastName, $fristName){
return "bienvenue $lastName $fristName, que souhaitez-vous ?";
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
<?= 
concatString("brice" , "briere")
?>
</body>

</html>