<?php
    function concat($string, $nombre){
        return  "je m'appelle" . $string .  "j'ai " . $nombre . "  ans";
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
   <p><?php echo concat('Paul ', 33) ?></p>
</body>

</html>