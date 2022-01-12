<?php
define('HOST','localhost' );
define('db_name','podcasts');
define('user','root');
define('PASS','');
// Voici le code de connection qui permet de se connecter à la base de donnée
try {
    $db = new PDO("mysql:host="  .HOST. ";dbname=".db_name, user,);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connecté > OK !";
} catch (PDOException $e) {
    echo $e;
}
?>