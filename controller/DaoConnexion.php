<?php

class DaoConnexion{

    // Propriété static pour eviter le this et acceder aux valeurs ensuite
    //1. Serveur 2.quelle BDD ? 3. username 4. mdp 
    //5. nommer une variable pour la connexion a la BDD reutilisable

    private static $server = "mysql:host = localhost";
    private static $db = "dbname = gsb_frais";
    private static $user = "root";
    private static $mdp = "root";
    protected static $link;

    public function __construct(){
        DaoConnexion::$link = new PDO(DaoConnexion::$server.";".DaoConnexion::$db, DaoConnexion::$user,
        DaoConnexion::$mdp, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
}

?>