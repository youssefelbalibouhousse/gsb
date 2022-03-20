<?php

class FraisForfait{

    //on utlisera des constantes car les valeurs de fiches frais ne bouge pas (4 valeurs)

    //tableau associatif qui utlise des libelles plutot que des index numerique
    const ETP = array(
        "libelle" => "Forfait etape",
        "montant" => 110.00
    );
    const KM = array(
        "libelle" => "Frais kilometrique",
        "montant" => 0.62
    );
    const NUI = array(
        "libelle" => "Nuitée Hotel",
        "montant" => 80.00
    );
    const REP = array(
        "libelle" => "Repas Restaurant",
        "montant" => 25.00
    );

}

?>