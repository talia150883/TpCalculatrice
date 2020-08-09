
<?php
require_once "function/server.php";

require_once "function/header.php";
?>


<?php

//    //on recupere la methode de type get
//    $method = $_SERVER['REQUEST_METHOD'];
//
//
////on verifie les donnée ont bien ete envoyé
//    if ($method === "POST" && !empty($_POST)) {
//
//        $connexion = db_connexion();
//
////on recupére le infos saisie par le user
//
//        $identifiant = !empty($_POST['identifiant']) ? $_POST['identifiant'] : '';
//        $password = !empty($_POST['password']) ? $_POST['password'] : '';
//
//
////on fait des verifications sur les saisies
//
//        $identifiantValide = filter_input(INPUT_POST, 'identifiant', FILTER_VALIDATE_EMAIL);
//        $passwordValide = strlen(trim($password)) !== 0;
//
//
//
//
//        if (!$identifiantValide) {
//            $msgIdentifiant = "identifiant est requis pour ce champ avec @";
//        }
//
//        if (!$passwordValide) {
//            $msgPassword = "saisir mot de passe";
//        }
//
//
//
//
////Instruction sql insertion
//            $sql = "insert into login ( identifiant, password) values (?,?)";
//
////on prepare la requete
//            $req_preparee = $connexion->prepare($sql);
//
////on execute la requete en passant les valeurs
//            try {
//                $req_preparee->execute([$identifiant, $password]);
//                header("Location:index.php");
//            } catch (Exception $e) {
//                exit("<h2 class='text-danger text-center'>un probleme est survenu lors de l'execution de la requête</h2>");
//            }
//
//
//
//
//}
?>

<?php
session_start();

if(isset($_POST['enregistrer'])) {
    $identifiant = $_POST['identifiant'];
    $password = $_POST['password'];

    $db = new PDO('mysql:host=localhost;dbname=calculatrice', 'root', '');
    $sql = "SELECT * FROM  register where id = '$identifiant'";
    $result = $db->prepare($sql);
    $result->execute([$identifiant, $password]);


    try{

        $data=$result->fetchAll();
        if(password_verify($password,$data[0]["password"])){
            $_SESSION['identifiant'] =$identifiant;
            $_SESSION['password'] =$password;
//            header("Location:index.php");

        }


    }catch(Exception $e) {


    }


}

?>

<?php



?>


<h1>Login</h1>


<form method="POST"  action="login.php"   autocomplete="off"> <!--  action='index.php'  -->

    <fieldset>

        <legend class="co">Connectez vous</legend>

        <div class="form-group">
            <label for="email">Identifiant</label> <br>
            <input size="40" type="email" id="email" placeholder="identifiant avec @email" name="identifiant">
        </div>

        <div class="form-group">
            <label for="Password1">Mot de passe</label> <br>
            <input size="40" type="password" id="password" placeholder="Password" name="password">
        </div>

        <div class="he">
            <button class="en" type="submit" name="'enregistrer" value="valider" >Enregistrer</button>
            <!--<button type="submit" class="">Réinitialiser</button>-->
        </div>
    </fieldset>

</form>


    <?php
    require_once "function/footer.php";
    ?>