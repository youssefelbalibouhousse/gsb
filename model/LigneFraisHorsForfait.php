<?php

class LigneFraisHorsForfait{

    // Propriétés

    private $id; //id est autoincremente dans la BDD donc pas initialiser dans le constructeur
    private $idVisiteur;
    private $mois;
    private $libelle;
    private $date;
    private $montant;

    //Constructeur

    public function __construct(string $idVisiteur, string $mois, string $libelle, string $date, float $montant){

        $this->idVisiteur = $idVisiteur;
        $this->mois = $mois;
        $this->libelle = $libelle;
        $this->date = $date;
        $this->montant = $montant;

    }

    
    //Getter et setters


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
     * Get the value of libelle
     */ 
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set the value of libelle
     *
     * @return  self
     */ 
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get the value of date
     */ 
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of date
     *
     * @return  self
     */ 
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get the value of montant
     */ 
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set the value of montant
     *
     * @return  self
     */ 
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }


    // on en aura besoin pour recuperer les données sur la BDD
    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}

?>