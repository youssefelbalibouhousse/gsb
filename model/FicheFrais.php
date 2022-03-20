<?php

class FicheFrais{

    private $idVisiteur;
    private $mois;
    private $nombreJustificatifs;
    private $montantValide;
    private $dateModif;
    private $idEtat;

    public function __construct(string $idVisiteur, string $mois, int $nombreJustificatifs, float $montantValide,
                                string $dateModif, string $idEtat)
    {
        $this->idVisiteur = $idVisiteur;
        $this->mois = $mois;
        $this->nombreJustificatifs = $nombreJustificatifs;
        $this->montantValide = $montantValide;
        $this->dateModif = $dateModif;
        $this->idEtat = $idEtat;

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
     * Get the value of nombreJustificatifs
     */ 
    public function getNombreJustificatifs()
    {
        return $this->nombreJustificatifs;
    }

    /**
     * Set the value of nombreJustificatifs
     *
     * @return  self
     */ 
    public function setNombreJustificatifs($nombreJustificatifs)
    {
        $this->nombreJustificatifs = $nombreJustificatifs;

        return $this;
    }

    /**
     * Get the value of montantValide
     */ 
    public function getMontantValide()
    {
        return $this->montantValide;
    }

    /**
     * Set the value of montantValide
     *
     * @return  self
     */ 
    public function setMontantValide($montantValide)
    {
        $this->montantValide = $montantValide;

        return $this;
    }

    /**
     * Get the value of dateModif
     */ 
    public function getDateModif()
    {
        return $this->dateModif;
    }

    /**
     * Set the value of dateModif
     *
     * @return  self
     */ 
    public function setDateModif($dateModif)
    {
        $this->dateModif = $dateModif;

        return $this;
    }

    /**
     * Get the value of idEtat
     */ 
    public function getIdEtat()
    {
        return $this->idEtat;
    }

    /**
     * Set the value of idEtat
     *
     * @return  self
     */ 
    public function setIdEtat($idEtat)
    {
        $this->idEtat = $idEtat;

        return $this;
    }
}

?>