<?php

var_dump($_POST);

$errorMessages = [];

$regexName = '/^[a-zA-Z]+$/';
$regexAnniv = '/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/';
$regexAdresse = '/^[a-zA-Z]-[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/';
$regexTel = '/^(0|\+33)[1-9]([-. ]?[0-9]{2}){4}$/';
$regexDate = '/^\d{4}(-)(((0)[0-9])|((1)[0-2]))(-)([0-2][0-9]|(3)[0-1])$/';
$studyArray = [
    1 => "Sans",
    2 => "Bac",
    3 => "Bac +2",
    4 => "Bac +3",
    5 => "Supérieur"
];


$showForm = true;


if (isset($_POST['submit'])) {


    if (isset($_POST['firstName'])) {

        if (!preg_match($regexName, $_POST['firstName'])) {
            $errorMessages['firstName'] = 'Veuillez saisir un Prénom valide';
        }
        if (empty($_POST['firstName'])) {
            $errorMessages['firstName'] = 'Veuillez saisir votre Prénom.';
        }
    }

    if (isset($_POST['name'])) {

        if (!preg_match($regexName, $_POST['name'])) {
            $errorMessages['name'] = 'Veuillez saisir un nom valide';
        }
        if (empty($_POST['name'])) {
            $errorMessages['name'] = 'Veuillez saisir votre nom.';
        }
    }

    var_dump($errorMessages);


    if (isset($_POST['date'])) {

        // if (!preg_match($regexName, $_POST['date'])) {
        //     $errorMessages['date'] = 'Veuillez saisir une date de naissance';
        // }
        if ($_POST['date'] >= date('Y-m-d')) {
            $errorMessages['date'] = 'Date impossible !';
        }
        if (empty($_POST['date'])) {
            $errorMessages['date'] = 'Veuillez saisir votre date de naissance.';
        }
    }

    if (isset($_POST['Pays'])) {

        if (!preg_match($regexName, $_POST['Pays'])) {
            $errorMessages['Pays'] = 'Veuillez saisir une Pays valide';
        }
        if (empty($_POST['Pays'])) {
            $errorMessages['Pays'] = 'Veuillez saisir votre Pays';
        }
    }

    if (isset($_POST['Nationalité'])) {

        if (!preg_match($regexName, $_POST['Nationalité'])) {
            $errorMessages['Nationalité'] = 'Veuillez saisir une Nationalité valide';
        }
        if (empty($_POST['Nationalité'])) {
            $errorMessages['Nationalité'] = 'Veuillez saisir votre Nationalité';
        }
    }

    if (isset($_POST['address'])) {

        // if (!preg_match($regexAdresse, $_POST['address'])) {
        //     $errorMessages['address'] = 'Veuillez saisir une Adresse valide';
        // }
        if (empty($_POST['address'])) {
            $errorMessages['address'] = 'Veuillez saisir votre Adresse';
        }
    }


    if (isset($_POST['email'])) {


        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errorMessages['email'] = 'Veuillez saisir une Adresse Mail valide';
        }
        if (empty($_POST['email'])) {
            $errorMessages['email'] = 'Veuillez saisir votre Adresse Mail';
        }
    }


    if (isset($_POST['phonenumber'])) {

        if (!preg_match($regexTel, $_POST['phonenumber'])) {
            $errorMessages['phonenumber'] = 'Veuillez saisir un numéro de téléphone valide';
        }
        if (empty($_POST['phonenumber'])) {
            $errorMessages['phonenumber'] = 'Veuillez saisir votre numéro de téléphone';
        }
    }

    if (!isset($_POST['select'])) {
        $errorMessages['select'] = 'Veuillez saisir un niveau d\'études valide';
    }

    if (isset($_POST['select'])) {
        if (!array_key_exists($_POST['select'], $studyArray)) {
            $errorMessages['select'] = 'erreur sur la key';
        }
    }

    if (isset($_POST['hero'])) {

        // if (!preg_match($regexTel, $_POST['hero'])) {
        //     $errorMessages['hero'] = 'Veuillez saisir un hero valide';
        // }
        if (empty($_POST['hero'])) {
            $errorMessages['hero'] = 'Veuillez saisir votre hero';
        }
    }

    if (isset($_POST['codecademy'])) {

        if (!filter_var($_POST['codecademy'], FILTER_VALIDATE_URL)) {
            $errorMessages['codecademy'] = 'Veuillez saisir un URL valide';
        }
        if (empty($_POST['codecademy'])) {
            $errorMessages['codecademy'] = 'Veuillez saisir votre URL';
        }
    }

    if (isset($_POST['badge'])) {

        // if (!preg_match($regexName, $_POST['badge'])) {
        //     $errorMessages['badge'] = 'Veuillez saisir un badge';
        // }
        if (empty($_POST['badge'])) {
            $errorMessages['badge'] = 'Veuillez saisir votre badge';
        }
    }

    if (isset($_POST['hack'])) {

        // if (!preg_match($regexTel, $_POST['hack'])) {
        //     $errorMessages['hack'] = 'Veuillez saisir un hack valide';
        // }
        if (empty($_POST['hack'])) {
            $errorMessages['hack'] = 'Veuillez saisir votre hack';
        }
    }

    if (isset($_POST['xp'])) {

        // if (!preg_match($regexTel, $_POST['xp'])) {
        //     $errorMessages['xp'] = 'Veuillez saisir une xp valide';
        // }
        if (empty($_POST['xp'])) {
            $errorMessages['xp'] = 'Veuillez saisir votre xp';
        }
    }

    if (count($errorMessages) == 0) {
        $lastName = htmlspecialchars($_POST['name']);
        $firstName = htmlspecialchars($_POST['firstName']);
        $birthDate = htmlspecialchars($_POST['date']);
        $phoneNumber = htmlspecialchars($_POST['phonenumber']);
        $showForm = false; 
    }
}


var_dump($errorMessages);
