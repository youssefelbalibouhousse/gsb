<?php

class DaoFicheFrais extends DaoConnexion{

    public function addFicheFrais(FicheFrais $ficheFrais){

        //recuperation des proprietes de $ficheFrais 

        $idVisiteur = $ficheFrais->getIdVisiteur();
        $mois = $ficheFrais->getMois();
        $nombreJustificatifs = $ficheFrais->getNombreJustificatifs();
        $montantValide = $ficheFrais->getMontantValide();
        $dateModif = $ficheFrais->getDateModif();
        $idEtat = $ficheFrais->getIdEtat();

        //Ici les données recuperer sont rediriger dans VALUES afin d'inserer dans la table fiche frais
        $request = "INSERT INTO ficheFrais VALUES (:idVisiteur, :mois, :nombreJustificatifs, :montantValide, :dateModif, :idEtat)";

        try {
            
            //prepare la requete
            $stmt = parent::$link->prepare($request);

            //remplace les parametre de la requete par les variable recuperer plus haut :

            $stmt->bindParam(":idVisiteur",$idVisiteur); //la variable est liée en tant que reference
            $stmt->bindParam(":mois",$mois);
            $stmt->bindParam(":nombreJustificatifs",$nombreJustificatifs);
            $stmt->bindParam(":montantValide",$montantValide);
            $stmt->bindParam(":dateModif",$dateModif);
            $stmt->bindParam(":idEtat",$idEtat);
            //Ordre d'execution de la requete
            $stmt->execute();
            echo "la fiche de frais a été enregistrer/inserrer en BDD";


        } catch (Exception $e){
            echo "Erreur !1 ".$e->getMessage();
            
        }

    }

    //Obtenir la liste des fiche de frais d'un visiteur :

    public function listFicheFrais(string $idvisteur){
        
        $request = "SELECT * FROM ficheFrais WHERE idVisiteur = :idVisiteur"; //requete de recuperation de toute les fiche frais du visiteur
        try{
            $stmt = parent::$link->prepare($request);
           
            $stmt->execute();
        }catch (Exception $e){
            echo "Erreur !2 ".$e->getMessage();
        }
        
        //recuperation du resultat de la requete de liste des fiche :
        $line = $stmt->fetch();
        //initialise le tableau
        $listFicheFrais = array();
        //on boucle sur les resultat tanq qu'il y en as
        while($line != null){
            $ficheFrais = new FicheFrais($line["idVisiteur"], $line["mois"], $line["nombreJustificatifs"], $line["montantValide"],
             $line["dateModif"], $line["idEtat"]);

            //on ajoute chaque nouvelle objet fichefrais(qui a toute les données) au tableau associatif
            $listFicheFrais[]  = $ficheFrais;
            $line = $stmt->fetch();
        }
        //on rend la liste de fiche frais obtenu
        return $listFicheFrais;


    }

}