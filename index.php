<?php


//Inclusion des fichier a tester
include "model/Visiteur.php";
include "model/Etat.php";
include "model/FraisForfait.php";
include "model/FicheFrais.php";

// on instancie un nouveau visiteur
$visiteur1 = new Visiteur('a101', 'MontMiraille', 'Goedffroy', 'Monjoie','QueTrepasseSiJeFaiblis', 
                          'Pimpadour', '46000','Pimpacourt', '20220315');

// On affiche ce visiteur grace aux setters car private

echo "Affichage des valeurs grace aux getters"."</br>";
echo "</br>";

echo $visiteur1->getId()." ".$visiteur1->getNom()." ".$visiteur1->getPrenom()." ".$visiteur1->getLogin()." ".
     $visiteur1->getMotDePasse()." ".$visiteur1->getAdresse()." ".$visiteur1->getCodePostal()." ".$visiteur1->getVille()." ".
     $visiteur1->getDateEmbauche()."</br>";

echo "</br>";


//vardump
echo "Voila le var_dump de visiteur1"."</br>";
echo "</br>";
var_dump($visiteur1);

// Test sur les setters

echo "</br>";
/* 
$visiteur1->setId("a042");
$visiteur1->setNom("Jacouille");
*/
echo "</br>"; 

// On affiche afin de check la modification

echo $visiteur1->getId()." ".$visiteur1->getNom();
echo "</br>"; 

$visiteur2 = new Visiteur('a102', 'Fripouille', 'Jacouille', 'Geux','OK!!!!!', 
                          'Le grenier', '92000','Mont-Miraille', '20220319');

//On créer un tableau afin d'y stocker les differents visiteurs.

$visiteur[]=$visiteur1;
$visiteur[]=$visiteur2;

echo "Tableau de visiteur :"."</br>"; 
echo "<table border = 1>";
echo "<tr><td>id</td><td>nom</td><td>prenom</td><td>login</td></tr>";

//On boucle sur chaque visiteur du tableau et on l'affiche

foreach($visiteur as $visiteur){
    echo "<tr><td>".$visiteur->getId()."</td><td>".$visiteur->getNom()."</td><td>".$visiteur->getPrenom()."</td><td>"
         .$visiteur->getLogin()."</td></tr>";
}

echo "</table border = 1>";
echo "</br>";

//Pour eviter le mapping ou va utliser les constantes :

echo "test de l'appel de la classe Etat via les constantes :"."</br>";

echo Etat::CL;
echo "</br>";

//Constante pour les calcls de frais
echo "On test l'appel des constantes ETP de FraisForfait : ";
echo "</br>";
echo FraisForfait::ETP["libelle"]."</br>";
echo FraisForfait::ETP["montant"]."</br>";

//Test LigneFraisHorsForfait

//Test LigneFraisForfait

//Test FraisForfait

//Test FicheFrais
echo "</br>";
$fiche1 = new FicheFrais('a101','Aout',7,112,'2022-03-19','CL');
var_dump($fiche1);
?>