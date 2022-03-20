<?php

class LigneFraisForfait{

    //Propriétés

    private $idVisiteur;
    private $mois;
    private $idFraisForfait;
    private $quantité;

    public function __construct(string $idVisiteur, string $mois, string $idFraisForfait, int $quantité){
        
        $this->idVisiteur = $idVisiteur;
        $this->mois = $mois;
        $this->idFraisForfait = $idFraisForfait;
        $this->quantité =  $quantité;
    }

    

    /**
     * Get the value of idVisiteur
     */ 
    public function getIdVisiteur()
    {
        return $this->idVisiteur;
    }

    /**
     * Set the value of idVisiteur
     *
     * @return  self
     */ 
    public function setIdVisiteur($idVisiteur)
    {
        $this->idVisiteur = $idVisiteur;

        return $this;
    }

    /**
     * Get the value of mois
     */ 
    public function getMois()
    {
        return $this->mois;
    }

    /**
     * Set the value of mois
     *
     * @return  self
     */ 
    public function setMois($mois)
    {
        $this->mois = $mois;

        return $this;
    }

    /**
     * Get the value of idFraisForfait
     */ 
    public function getIdFraisForfait()
    {
        return $this->idFraisForfait;
    }

    /**
     * Set the value of idFraisForfait
     *
     * @return  self
     */ 
    public function setIdFraisForfait($idFraisForfait)
    {
        $this->idFraisForfait = $idFraisForfait;

        return $this;
    }

    /**
     * Get the value of quantité
     */ 
    public function getQuantité()
    {
        return $this->quantité;
    }

    /**
     * Set the value of quantité
     *
     * @return  self
     */ 
    public function setQuantité($quantité)
    {
        $this->quantité = $quantité;

        return $this;
    }
}

?>