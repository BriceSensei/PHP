<?php

require_once 'controller_index.php';

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>TP Partie 10</title>
</head>

<body>
    <h1 class="text-center mb-5">Formulaire d'enregistrement</h1>

    <?php if ($showForm) { ?>
        
    <form novalidate action="index.php" method="POST" class="container col-6 row g-3 mx-auto">

        <div class="mb-3 col-md-6">
            <label for="lastName" class="form-label">Votre nom :</label>
            <!-- ternaire dans value => permet de laisser le nom dans le champ après validation-->
            <input type="text" class="form-control" id="lastName" name="lastName" placeholder="ex: Doe" value="<?= isset($_POST['lastName']) ? $_POST['lastName'] : '' ?>" required>
            <div class="text-danger">
                <!-- message d'erreur si pas validé -->
                <span><?= isset($errorMessages['lastName']) ? $errorMessages['lastName'] : '' ?></span>

            </div>
        </div>

        <div class="mb-3 col-md-6">
            <label for="firstName" class="form-label">Votre prénom :</label>
            <input type="text" class="form-control" id="firstName" name="firstName" placeholder="ex: John" value="<?= isset($_POST['firstName']) ? htmlspecialchars($_POST['firstName']) : '' ?>" required>
            <div class="text-danger">
                <span><?= isset($errorMessages['firstName']) ? $errorMessages['firstName'] : '' ?></span>
            </div>
        </div>

        <div class="mb-3 col-md-6">
            <label for="birthDate" class="form-label">Votre date de naissance :</label>
            <input type="date" class="form-control" id="birthDate" name="birthDate" placeholder="05/12/2050" value="<?= isset($_POST['birthDate']) ? $_POST['birthDate'] : '' ?>" required>
            <div class="text-danger">
                <span><?= isset($errorMessages['birthDate']) ? $errorMessages['birthDate'] : '' ?></span>
            </div>
        </div>

        <div class="mb-3 col-md-6">
            <label for="country" class="form-label">Votre pays de naissance :</label>
            <input type="text" class="form-control" id="country" name="country" placeholder="ex: Atlantide" value="<?= isset($_POST['country']) ? $_POST['country'] : '' ?>" required>
            <div class="text-danger">
                <span><?= isset($errorMessages['country']) ? $errorMessages['country'] : '' ?></span>
            </div>
        </div>

        <div class="mb-3 col-md-6">
            <label for="nationality" class="form-label">Votre nationalité :</label>
            <input type="text" class="form-control" id="nationality" name="nationality" placeholder="ex: wookiee" value="<?= isset($_POST['nationality']) ? $_POST['nationality'] : '' ?>" required>
            <div class="text-danger">
                <span><?= isset($errorMessages['nationality']) ? $errorMessages['nationality'] : '' ?></span>
            </div>
        </div>

        <div class="mb-3 col-md-6">
            <label for="address" class="form-label">Votre adresse :</label>
            <input type="text" class="form-control" id="address" name="address" placeholder="ex: 24 place de Tatooine 87520 Mordor" value="<?= isset($_POST['address']) ? $_POST['address'] : '' ?>" required>
            <div class="text-danger">
                <span><?= isset($errorMessages['address']) ? $errorMessages['address'] : '' ?></span>
            </div>
        </div>

        <div class="mb-3 col-md-6">
            <label for="mail" class="form-label">Votre email :</label>
            <input type="email" class="form-control" id="mail" name="mail" placeholder="hobbit4ever@gamil.com" value="<?= isset($_POST['mail']) ? $_POST['mail'] : '' ?>" required>
            <div class="text-danger">
                <span><?= isset($errorMessages['mail']) ? $errorMessages['mail'] : '' ?></span>
            </div>
        </div>

        <div class="mb-3 col-md-6">
            <label for="phoneNumber" class="form-label">Votre numéro de téléphone :</label>
            <input type="text" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="01.23.45.67.89" value="<?= isset($_POST['phoneNumber']) ? $_POST['phoneNumber'] : '' ?>" required>
            <div class="text-danger">
                <span><?= isset($errorMessages['phoneNumber']) ? $errorMessages['phoneNumber'] : '' ?></span>
            </div>
        </div>

        <div>
            <select class="form-select mb-3 col-md-6" aria-label="Default select example" name="certificate" required>
                <option selected disabled>Plus haut diplôme obtenu : </option>
                <!-- les options sont dans un tableau en php controller_index.php -->
                <?php 
                foreach ($certificateArray as $key => $value) { ?>
                    <option value="<?= $key ?>" <?= isset($_POST['certificate']) && $_POST['certificate'] == $key ? 'selected' : '' ?> ><?= $value ?></option>
                <?php } ?>
            </select>
            <div class="text-danger">
                <span><?= isset($errorMessages['certificate']) ? $errorMessages['certificate'] : '' ?></span>
            </div>
        </div>

        <div class="mb-3 col-md-6">
            <label for="poleEmploiNumber" class="form-label">Votre numéro Pôle Emploi :</label>
            <input type="text" class="form-control" id="poleEmploiNumber" name="poleEmploiNumber" placeholder="ex: 1234567s" value="<?= isset($_POST['poleEmploiNumber']) ? $_POST['poleEmploiNumber'] : '' ?>" required>
            <div class="text-danger">
                <span><?= isset($errorMessages['poleEmploiNumber']) ? $errorMessages['poleEmploiNumber'] : '' ?></span>
            </div>
        </div>

        <div>
            <select class="form-select mb-3 col-md-6" aria-label="Default select example" name="badge" required>
                <option selected disabled>Nombre de badge obtenu : </option>
                <?php 
                foreach ($badgeArray as $keyBadge => $valueBadge) { ?>
                    <option value="<?= $keyBadge ?>" <?= isset($_POST['badge']) && $_POST['badge'] == $keyBadge ? 'selected'  : '' ?> ><?= $valueBadge ?></option>
                <?php } ?>
            </select>
            <div class="text-danger">
                <span><?= isset($errorMessages['badge']) ? $errorMessages['badge'] : '' ?></span>
            </div>
        </div>

        <div class="mb-3 col-md-6">
            <label for="codecademyCount" class="form-label">Votre lien compte Codecademy :</label>
            <input type="url" class="form-control" id="codecademyCount" name="codecademyCount" placeholder="ex: https://www.codecademy.com/" value="<?= isset($_POST['codecademyCount']) ? $_POST['codecademyCount'] : '' ?>" required>
            <div class="text-danger">
                <span><?= isset($errorMessages['codecademyCount']) ? $errorMessages['codecademyCount'] : '' ?></span>
            </div>
        </div>

        <div class="mb-3">
            <label for="hero" class="form-label">Si vous étiez un.e super héro.ïne.s, qui seriez-vous et pourquoi ?</label>
            <textarea class="form-control" id="hero" name="hero" rows="3" required><?= isset($_POST['hero']) ? $_POST['hero'] : '' ?></textarea>
            <div class="text-danger">
                <span><?= isset($errorMessages['hero']) ? $errorMessages['hero'] : '' ?></span>
            </div>
        </div>

        <div class="mb-3">
            <label for="hack" class="form-label">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)</label>
            <textarea class="form-control" id="hack" name="hack" rows="3" required><?= isset($_POST['hack']) ? $_POST['hack'] : '' ?></textarea>
            <div class="text-danger">
                <span><?= isset($errorMessages['hack']) ? $errorMessages['hack'] : '' ?></span>
            </div>
        </div>

        <div class="mb-3">
            <label for="skills" class="form-label">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="skills" id="flexRadioDefault1" value="oui" <?= isset($_POST['skills']) && $_POST['skills'] == 'oui' ? 'checked' : '' ?>>
                <label class="form-check-label" for="flexRadioDefault1">
                    Oui
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="skills" id="flexRadioDefault2" value="non" <?= isset($_POST['skills']) && $_POST['skills'] == 'non' ? 'checked' : '' ?>>
                <label class="form-check-label" for="flexRadioDefault2">
                    Non
                </label>
            </div>
            <div class="text-danger">
                <span><?= isset($errorMessages['skills']) ? $errorMessages['skills'] : '' ?></span>
            </div>
        </div>

        <div class="col-12 text-center mb-3">
            <button class="btn colorButton" type="submit" name="submit">Envoyer</button>
        </div>
    </form>

    <?php } else { ?>

    <p>Votre Nom est : <strong><?= $lastName ?></strong></p>
    <p>Votre Prénom est : <strong><?= $firstName ?></strong></p>
    <p>Votre date de naissance est le <strong><?= $birthDate ?></strong></p>
    <p>Votre pays de naissance : <strong><?= $country ?></strong></p>
    <p>Votre nationalité est : <strong><?= $nationality ?></strong></p>
    <p>Votre adresse : <strong><?= $address ?></strong></p>
    <p>Votre email est : <strong><?= $mail ?></strong></p>
    <p>Votre numéro de téléphone est le <strong><?= $phoneNumber ?></strong></p>
    <p>Votre plus haut diplôme est : <strong><?= $certificate ?></strong></p>
    <p>Votre numéro Pôle Emploi est le : <strong><?= $poleEmploiNumber ?></strong></p>
    <p>Nombre de badge obtenus : <strong><?= $badge ?></strong></p>
    <p>Votre compte Codecademy : <strong><?= $codecademyCount ?></strong></p>
    <p>Si vous étiez un.e super héro.ïne.s, qui seriez-vous et pourquoi ? <strong><?= $hero ?></strong></p>
    <p>Racontez-nous un de vos "hacks" (pas forcément technique ou informatique) <strong><?= $hack ?></strong></p>
    <p>Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ? <strong><?= $skills ?></strong></p>
    <?php } ?>

    <footer class="mt-5 pt-4">
        copyright : Céline Louvel 2021
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>