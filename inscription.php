<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/formulaire.css">
    <link rel="stylesheet" href="assets/formulaireCo.css">
    <link rel="stylesheet" href="assets/inscription.css">
    <link rel="stylesheet" href="assets/navBarreCo.css">

</head>

<body>

    <?php

    include './Views/navBarre.php';


    ?>
    <main>
        <div id="inscription">
            <h2> Inscription </h2>
            <form class="row g-3">
                <div class="col-md-6">
                    <label for="inputPrenom" class="form-label">Prénom</label>
                    <input type="text" class="form-control" id="inputPrenom">
                </div>
                <div class="col-md-6">
                    <label for="inputNom" class="form-label">Nom</label>
                    <input type="text" class="form-control" id="inputNom">
                </div>
                <div class="col-md-6">
                    <label for="inputEmail" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail">
                </div>
                <div class="col-md-6">
                    <label for="inputPassword" class="form-label">Mot de passe</label>
                    <input type="password" class="form-control" id="inputPassword">
                </div>
                <div class="col-md-6">
                    <label for="inputPasswordVerif" class="form-label">Confirmation du mot de passe</label>
                    <input type="password" class="form-control" id="inputPasswordVerif">
                </div>

                <a href="../coTodolist.php" type="button" class="btn btn-primary">S'inscrire</a>
    </main>
</body>

</html>

