<?php

// L'ordre est important ici car DaoFichefrais a besoin (extends et function)  des deux include precedent pour fonctionner donc les includes avant
include "controller/DaoConnexion.php";
include "model/FicheFrais.php";
include "controller/DaoFicheFrais.php";

//instanciation de la Dao

$daoFicheFrais = new DaoFicheFrais();

// instancie un nouvel objet ficheFrais qu'on  ajoutera via la methode addFicheFrais(DaoConnexion)
$ficheFrais = new FicheFrais("a101", '01', 4, 1000, "2022-03-20", "CL" );
$ficheFrais2 = new FicheFrais("a101", '02', 1, 333, "2022-03-2022", "CL");
//methode d'ajout
$daoFicheFrais-> addFicheFrais($ficheFrais);
$daoFicheFrais-> addFicheFrais($ficheFrais2);

// Emploi de la methode listFicheFrais afin d'afficher sous forme de tableau la list des fiche de frais en passant comme argument son idVisiteur

$liste = $daoFicheFrais->listFicheFrais("a101");
var_dump($liste);


?>