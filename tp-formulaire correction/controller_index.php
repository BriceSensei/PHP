<?php

$errorMessages = [];

//$date = date('d/m/Y');

$regexName = '/^[a-zA-Z]+$/';
$regexBirthDate = '/^\d{4}(-)(((0)[0-9])|((1)[0-2]))(-)([0-2][0-9]|(3)[0-1])$/';
$regexAddress = '/^([0-9a-z\'àâéèêôùûçÀÂÉÈÔÙÛÇ\s-]{1,50})+$/'; // regex a modifier ne marche pas
$regexMail = '/^[-0-9a-zA-Z.+_]+@[-0-9a-zA-Z.+_]+.[a-zA-Z]{2,4}+$/';
$regexPhoneNumber = '/^0[1-68]([-. ]?[0-9]{2}){4}+$/';
$regexpoleEmploiNumber = '/^[0-9a-z]+$/';
$regexTextArea = '/^[a-z0-9]+$/'; //ponctuation a rajouter dans la regex

$certificateArray = [ 
    1 => 'sans',
    2 => 'Bac',
    3 => 'Bac+2',
    4 => 'Bac+3 ou supérieur'
];

$badgeArray = [
    1 => '1',
    2 => '2',
    3 => '3',
    4 => '4',
    5 => '5',
    6 => '6',
    7 => '7',
    8 => '8',
    9 => '9',
    10 => '10 ou plus'
];

$showForm = true;

//var_dump($_POST);

//var_dump($errorMessages);

// submit => affiche seulement au clique sur le bouton
if (isset($_POST['submit'])) {

    // lastName
    if (isset($_POST['lastName'])) {
        if (!preg_match($regexName, $_POST['lastName'])) {
            $errorMessages['lastName'] = 'Veuillez saisir un nom valide.';
        }
        if (empty($_POST['lastName'])) {
            $errorMessages['lastName'] = 'Veuillez saisir votre nom.';
        }
    }
    // firstName
    if (isset($_POST['firstName'])) {
        if (!preg_match($regexName, $_POST['firstName'])) {
            $errorMessages['firstName'] = 'Veuillez saisir un prénom valide.';
        }
        if (empty($_POST['firstName'])) {
            $errorMessages['firstName'] = 'Veuillez saisir votre prénom.';
        }
    }
    // birthDate
    if (isset($_POST['birthDate'])) {
        if (!preg_match($regexBirthDate, $_POST['birthDate'])) {
            $errorMessages['birthDate'] = 'Veuillez saisir une date valide.';
        }
        if ($_POST['birthDate'] >= date('Y-m-d')){
            $errorMessages['birthDate'] = 'Date impossible !';
        }
        if (empty($_POST['birthDate'])) {
            $errorMessages['birthDate'] = 'Veuillez saisir une date.';
        }
    }

    // country
    if (isset($_POST['country'])) {
        if (!preg_match($regexName, $_POST['country'])) {
            $errorMessages['country'] = 'Veuillez saisir un pays valide.';
        }
        if (empty($_POST['country'])) {
            $errorMessages['country'] = 'Veuillez saisir un pays.';
        }
    }
    //nationality
    if (isset($_POST['nationality'])) {
        if (!preg_match($regexName, $_POST['nationality'])) {
            $errorMessages['nationality'] = 'Veuillez saisir une nationalité valide.';
        }
        if (empty($_POST['nationality'])) {
            $errorMessages['nationality'] = 'Veuillez saisir une nationalité.';
        }
    }
    //address
    if (isset($_POST['address'])) {
        // if (!preg_match($regexAddress, $_POST['address'])) {
        //     $errorMessages['address'] = 'Veuillez saisir une adresse valide.';
        // }
        if (empty($_POST['address'])) {
            $errorMessages['address'] = 'Veuillez saisir une adresse.';
        }
    }
    //email
    if (isset($_POST['mail'])) {
        //filtre pour éviter une regex
        if (!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
            $errorMessages['mail'] = 'Veuillez saisir une adresse mail valide';
        }
        if (empty($_POST['mail'])) {
            $errorMessages['mail'] = 'Veuillez saisir une adresse email.';
        }
    }
    //phoneNumber
    if (isset($_POST['phoneNumber'])) {
        if (!preg_match($regexPhoneNumber, $_POST['phoneNumber'])) {
            $errorMessages['phoneNumber'] = 'Veuillez saisir un numéro de téléphone valide.';
        }
        if (empty($_POST['phoneNumber'])) {
            $errorMessages['phoneNumber'] = 'Veuillez saisir un numéro de téléphone.';
        }
    }
    //certificate

    if (!isset($_POST['certificate'])) {
        $errorMessages['certificate'] = 'veuillez faire un choix.';
    }
    // sécurité si quelqu'un essaie de modifier html/ajouter une option (en "inspecter")
    if (isset($_POST['certificate'])) {
        if (!array_key_exists($_POST['certificate'], $certificateArray)) {
            $errorMessages['certificate'] = 'Veuillez choisir un diplôme.';
        }
    }


    //poleEmploiNumber
    if (isset($_POST['poleEmploiNumber'])) {
        if (!preg_match($regexpoleEmploiNumber, $_POST['poleEmploiNumber'])) {
            $errorMessages['poleEmploiNumber'] = 'Veuillez saisir un numéro Pôle Emploi valide.';
        }
        if (empty($_POST['poleEmploiNumber'])) {
            $errorMessages['poleEmploiNumber'] = 'Veuillez saisir un numéro Pôle Emploi.';
        }
    }

    //badge
    if (!isset($_POST['badge'])) {
        $errorMessages['badge'] = 'veuillez faire un choix.';
    }
    // sécurité si quelqu'un essaie de modifier html/ajouter une option (en "inspecter")
    if (isset($_POST['badge'])) {
        if (!array_key_exists($_POST['badge'], $badgeArray)) {
            $errorMessages['badge'] = 'Veuillez choisir un chiffre.';
        }
    }

    //codecademyCount
    if (isset($_POST['codecademyCount'])) {
        //filtrephp pour valider l'url et éviter une regex
        if (!filter_var($_POST['codecademyCount'], FILTER_VALIDATE_URL)) {
            $errorMessages['codecademyCount'] = 'Veuillez saisir un lien valide.';
        }
        if (empty($_POST['codecademyCount'])) {
            $errorMessages['codecademyCount'] = 'Veuillez saisir un lien Codecademy.';
        }
    }

    //hero
    if (isset($_POST['hero'])) {
        if (!preg_match($regexTextArea, $_POST['hero'])) {
            $errorMessages['hero'] = 'Veuillez remplir le champ correctement.';
        }
        if (empty($_POST['hero'])) {
            $errorMessages['hero'] = 'Veuillez remplir le champ.';
        }
    }
    //hack
    if (isset($_POST['hack'])) {
        if (!preg_match($regexTextArea, $_POST['hack'])) {
            $errorMessages['hack'] = 'Veuillez remplir le champ correctement.';
        }
        if (empty($_POST['hack'])) {
            $errorMessages['hack'] = 'Veuillez remplir le champ.';
        }
    }
    // skills
    if (!isset($_POST['skills'])) {
        $errorMessages['skills'] = 'Veuillez faire un choix.';
    }

    if (count($errorMessages) == 0) {
        $lastName = htmlspecialchars($_POST['lastName']);
        $firstName = htmlspecialchars($_POST['firstName']);
        $birthDate = htmlspecialchars($_POST['birthDate']);
        $country = htmlspecialchars($_POST['country']);
        $nationality = htmlspecialchars($_POST['nationality']);
        $address = htmlspecialchars($_POST['address']);
        $mail = htmlspecialchars($_POST['mail']);
        $phoneNumber = htmlspecialchars($_POST['phoneNumber']);
        $certificate = $certificateArray[$_POST['certificate']];
        $poleEmploiNumber = htmlspecialchars($_POST['poleEmploiNumber']);
        $badge = htmlspecialchars($_POST['badge']);
        $codecademyCount = htmlspecialchars($_POST['codecademyCount']);
        $hero = htmlspecialchars($_POST['hero']);
        $hack = htmlspecialchars($_POST['hack']);
        $skills = htmlspecialchars($_POST['skills']);
        $showForm = false;
    }

    // var_dump($errorMessages);
}

