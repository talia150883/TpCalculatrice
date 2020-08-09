<?php


?>

<?php



function db_connexion()
{
    $database = "calculatrice";
    $user = "root";
    $pass = "";

    $url = "mysql:host=127.0.0.1;dbname=$database;charset=utf8";

    try {
        $connexion = new PDO($url, $user, $pass);
        $connexion->exec("set lc_time_names='fr_FR'");
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $connexion;
    } catch (PDOException $e) {
        exit($e->getMessage());
    }
}



//function entierAleatoire(min, max)
//{
//    return Math.floor(Math.random() * (max - min + 1)) + min;
//}
////Utilisation
////La variable contient un nombre aléatoire compris entre 1 et 10
//var entier = entierAleatoire(10, 99);










