<?php

class Loger extends Etudiant{

    protected $chambre;
    
    public function __construct(   
    $matricule = "",
    $nom = "",
    $prenom = "",
    $email = "",
    $telephone = "",
    $datenaissance = "",
  

    $chambre=""
    )
    {
        parent::__construct(
            $matricule,
            $nom,
            $prenom,
            $email,
            $telephone,
            $datenaissance
           

        );
        $this->chambre = $chambre;

        
    }
   

  

    public function getChambre()
    {
        return $this->chambre;
    }

    
    public function setChambre($chambre)
    {
        $this->chambre = $chambre;

        return $this;
    }

  

} 

?>