<?php
require_once "function/header.php";

require_once "function/server.php";
?>

<?php
//on recupere la methode de type get
$method = $_SERVER['REQUEST_METHOD'];


//on verifie les donnée ont bien ete envoyé
if ($method === "POST" && !empty($_POST)) {

    $connexion = db_connexion();

//on recupére le infos saisie par le user
    $prenom = !empty($_POST['prenom']) ? $_POST['prenom'] : '';
    $identifiant = !empty($_POST['identifiant']) ? $_POST['identifiant'] : '';
    $password = !empty($_POST['password']) ? $_POST['password'] : '';
    $confpassword = !empty($_POST['confpassword']) ? $_POST['confpassword'] : '';

//on fait des verifications sur les saisies
    $prenomValide = strlen(trim($prenom)) !== 0;
    $identifiantValide = filter_input(INPUT_POST, 'identifiant', FILTER_VALIDATE_EMAIL);
    $passwordValide = strlen(trim($password)) !== 0;
    $confpasswordValide = strlen(trim($confpassword)) !== 0;

    if (!$prenomValide) {
        $msgPrenom = "Le prénom est requis pour ce champ";
    }

    if (!$identifiantValide) {
        $msgIdentifiant = "identifiant est requis pour ce champ avec @";
    }

    if (!$passwordValide) {
        $msgPassword = "saisir mot de passe";
    }

    if (!$confpasswordValide) {
        $msgConfpassword = "Confirmez le mot de passe";
    }

   {

//Instruction sql insertion
        $sql = "insert into register (prenom, identifiant, password, confpassword) values (?,?,?,?)";

//on prepare la requete
        $req_preparee = $connexion->prepare($sql);

//on execute la requete en passant les valeurs
        try {
            $req_preparee->execute([$prenom, $identifiant, $password, $confpassword]);
            header("Location:calculatrice.php");
        } catch (Exception $e) {
            exit("<h2 class='text-danger text-center'>un probleme est survenu lors de l'execution de la requête</h2>");
        }
    }}
?>







<div>



    <div>

        <h1>Enregistrement</h1>

        <form class="register" method="post" autocomplete="off">
            <fieldset>

                <legend class="buttonlogin">Crée votre compte</legend>

                <div class="form-group">
                    <label for="prenom">Prenom</label> <br>
                    <input size="40" type="text" id="prenom" placeholder="prenom" name="prenom">
                </div>



                <div class="form-group">
                    <label for="email">Identifiant</label> <br>
                    <input size="40" type="email" id="email" placeholder="identifiant avec @email" name="identifiant" required>
                </div>



                <div class="form-group">
                    <label for="password">mot de passe</label> <br>
                    <input size="40" type="password" id="password" placeholder="mot de passe" name="password" required>
                </div>



                <div class="form-group">
                    <label for="conf_password">Confirmer mot de passe</label> <br>
                    <input size="40" type="password" id="conf_password" placeholder="confirmer mot de passe" name="conf_password" required>
                </div>


                <input class="val" type="submit"value="valider">

            </fieldset>

        </form>


    </div>
</div>

<?php
require_once "function/footer.php";
?>























<?php
require_once "function/footer.php";
?>

:};