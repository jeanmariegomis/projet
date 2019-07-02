<?php

class Type
{
    private $libelle;
    private $montant;
    public function __construct($libelle="", $montant="")
    {
        $this->libelle = $libelle;
        $this->montant = $montant;
    }
   

    public function getLibelle()
    {
        return $this->libelle;
    }

    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

   
    public function getMontant()
    {
        return $this->montant;
    }

    
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }
}
