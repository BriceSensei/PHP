<?php

// 1-formar --> regex --> "mauvais format"
//2 vide --> empty --> "veuillez saisir votre nom"

require_once "controlleur_index.php";

?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="assets/style.css" rel="stylesheet">
    <title></title>
</head>

<body>
    <div class="container">
        <h1 class="text-center p-5 shadow">Formulaire</h1>


        <?php

        if ($showForm) {

        ?>

            <form method="POST" action="index.php" novalidate>
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                Vos Information d'identité
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="card-body shadow-lg">

                                <div class="form-group">
                                    <span class="text-danger"></span>
                                    <label for="fristName">Votre Prénom : </label>
                                    <input class="form-control" placeholder="Emma" type="text" required name="firstName" value="<?= isset($_POST['fristName']) ? htmlspecialchars($_POST['fristName'])  : '' ?>">
                                    <div class="text-danger">
                                        <span><?= isset($errorMessages['fristName']) ? $errorMessages['fristName'] : '' ?></span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <span class="text-danger"></span>
                                    <label for="name">Votre Nom: </label>
                                    <input class="form-control" placeholder="Bière" type="text" required name="name" value="<?= isset($_POST['name']) ?  htmlspecialchars($_POST['name']) : '' ?>">
                                    <div class="text-danger">
                                        <span><?= isset($errorMessages['name']) ? $errorMessages['name'] : '' ?></span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <span class="text-danger"></span>
                                    <label for="date">Votre Date de Naissance: </label>
                                    <input class="form-control" placeholder="05/06/1111" type="date" required name="date" value="<?= isset($_POST['date']) ?  htmlspecialchars($_POST['date']) : '' ?>">
                                    <div class="text-danger">
                                        <span><?= isset($errorMessages['date']) ? $errorMessages['date'] : '' ?></span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <span class="text-danger"></span>
                                    <label for="Pays">Votre Pays de naissance: </label>
                                    <input class="form-control" placeholder="Japon" type="text" required name="Pays" value="<?= isset($_POST['Pays']) ?  htmlspecialchars($_POST['Pays']) : '' ?>">
                                    <div class="text-danger">
                                        <span><?= isset($errorMessages['Pays']) ? $errorMessages['Pays'] : '' ?></span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <span class="text-danger"></span>
                                    <label for="Nationalité">Votre Nationalité: </label>
                                    <input class="form-control" placeholder="Corée Du Nord" type="text" required name="Nationalité" value="<?= isset($_POST['Nationalité']) ?  htmlspecialchars($_POST['Nationalité']) : '' ?>">
                                    <div class="text-danger">
                                        <span><?= isset($errorMessages['Nationalité']) ? $errorMessages['Nationalité'] : '' ?></span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <span class="text-danger"></span>
                                    <label for="address">Votre Adresse: </label>
                                    <input class="form-control" placeholder="86 rue du bojeu, 69000 KriaxCity" type="text" required name="address" value="<?= isset($_POST['address']) ?  htmlspecialchars($_POST['address']) : '' ?>">
                                    <div class="text-danger">
                                        <span><?= isset($errorMessages['address']) ? $errorMessages['address'] : '' ?></span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <span class="text-danger"></span>
                                    <label for="email">Votre E-mail: </label>
                                    <input class="form-control" placeholder="Vegeta@niqueToutLeMonde.com" type="email" required name="email" id="email" value="<?= isset($_POST['email']) ?  htmlspecialchars($_POST['email']) : '' ?>">
                                    <div class="text-danger">
                                        <span><?= isset($errorMessages['email']) ? $errorMessages['email'] : '' ?></span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <span class="text-danger"></span>
                                    <label for="phonenumber">Votre Téléphone: </label>
                                    <input class="form-control" placeholder="+33 6 01 02 03 04" type="tel" required name="phonenumber" value="<?= isset($_POST['phonenumber']) ?  htmlspecialchars($_POST['phonenumber']) : '' ?>">
                                    <div class="text-danger">
                                        <span><?= isset($errorMessages['phonenumber']) ? $errorMessages['phonenumber'] : '' ?></span>
                                    </div>
                                </div>

                                <label for="select">Votre dernier diplôme:</label>
                                <select class="form-select" name="select" aria-label="Default select example" value="<?= isset($_POST['select']) ?  htmlspecialchars($_POST['select']) : '' ?>">
                                    <option selected disabled>Selectionner votre Diplôme</option>
                                    <!-- <option value="1">sans</option>
                                <option value="2">Bac</option>
                                <option value="3">Bac+2</option>
                                <option value="3">Bac+3</option>
                                <option value="3">Supérieur</option> -->
                                    <?php
                                    foreach ($studyArray as $key => $value) {  ?>
                                        <option value="<?= $key ?>" <?= isset($_POST['select']) && $_POST['select'] == $key ? 'selected' : '' ?>> <?= $value ?> </option>
                                    <?php } ?>
                                </select>
                                <div class="text-danger">
                                    <span><?= isset($errorMessages['select']) ? $errorMessages['select'] : '' ?></span>
                                </div>


                                <div class="form-group">
                                    <span class="text-danger"></span>
                                    <label for="pole"> Numéro pôle emploi </label>
                                    <input class="form-control" placeholder="368765P" type="text" required name="Pole">
                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                Vos Informations Secondaire
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="card-body shadow-lg">

                                <div class="form-group">
                                    <span class="text-danger"></span>
                                    <label for="hero">Si vous étiez un super héros qui seriez-vous et pourquoi ? </label>
                                    <textarea class="form-control" type="text" placeholder="Je serai aquaman parce que il sent l'eau de mer" required name="hero"> <?= isset($_POST['hero']) ? htmlspecialchars($_POST['hero'])  : '' ?></textarea>
                                    <div class="text-danger">
                                        <span><?= isset($errorMessages['hero']) ? $errorMessages['hero'] : '' ?></span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <span class="text-danger"></span>
                                    <label for="codecademy">Votre liens codecademy : </label>
                                    <textarea class="form-control" type="url" placeholder="Liens..." required name="codecademy"><?= isset($_POST['codecademy']) ? htmlspecialchars($_POST['codecademy'])  : '' ?></textarea>
                                    <div class="text-danger">
                                        <span><?= isset($errorMessages['codecademy']) ? $errorMessages['codecademy'] : '' ?></span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <span class="text-danger"></span>
                                    <label for="badge">Nombre de badge : </label>
                                    <textarea class="form-control" type="number" placeholder="Combien de badge avez vous eu dans la région de Kanto" required name="badge" value="<?= isset($_POST['badge']) ? htmlspecialchars($_POST['badge'])  : '' ?>"></textarea>
                                    <div class="text-danger">
                                        <span><?= isset($errorMessages['badge']) ? $errorMessages['badge'] : '' ?></span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <span class="text-danger"></span>
                                    <label for="hack">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)</label>
                                    <textarea class="form-control" type="text" placeholder="Une fois en stage d'été j'ai..." required name="hack"><?= isset($_POST['hack']) ? htmlspecialchars($_POST['hack'])  : '' ?></textarea>
                                    <div class="text-danger">
                                        <span><?= isset($errorMessages['hack']) ? $errorMessages['hack'] : '' ?></span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <span class="text-danger"></span>
                                    <label for="xp">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</label>
                                    <textarea class="form-control" type="text" placeholder="j'ai une fois..." required name="xp"> <?= isset($_POST['xp']) ? htmlspecialchars($_POST['xp'])  : '' ?></textarea>
                                    <div class="text-danger">
                                        <span><?= isset($errorMessages['xp']) ? $errorMessages['xp'] : '' ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
    </div>

    <div class="d-flex justify-content-center">
        <input class="btn btn-primary mt-4" type="submit" value="Valider" name="submit"></a>
    </div>
    </form>
<?php
        } else { ?>
    <p> votre Nom est <?= $lastName ?> </p>
    <p> votre Prénom est <?= $firstName ?> </p>
    <p> votre date de naissance  est <?= $birthDate ?> </p>
    <p> votre numéro est <?= $phoneNumber ?> </p>
<?php
        }
?>

</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>


</body>

</html>