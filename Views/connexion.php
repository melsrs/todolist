<main>
    <?php 
        if(isset($_POST['seConnecter'])){
            if(!empty($_POST['email']) AND !empty ($_POST['mdp'])){
            }else {
                echo "Veuillez completer tous les champs";
            }
        }
    ?>
        <div id="connexion">
            <h2> Connexion </h2>
            <form class="row g-3">
                <div class="col-md-6">
                    <label for="inputEmail" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail" name="email">
                </div>
                <div class="col-md-6">
                    <label for="inputPassword" class="form-label" >Mot de passe</label>
                    <input type="password" class="form-control" id="inputPassword" name="mdp">
                </div>

                <div class="buttonConnexion">
                <a href="../coTodolist.php" type="button" class="btn btn-primary" name="seConnecter">Se connecter</a>
                    <a href="../inscription.php" type="button" class="btn btn-secondary">Inscription</a>
                </div>
    </main>