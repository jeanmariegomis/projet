<?php

class Chambre 
{
    protected $numero_chambre;
    

    public function __construct($numero_chambre="")
    {
            $this->numero_chambre=$numero_chambre;
            
     }

    
    public function getNumero_chambre()
    {
        return $this->numero_chambre;
    }

    
    public function setNumero_chambre($numero_chambre)
    {
        $this->numero_chambre = $numero_chambre;

        return $this;
    }

  
}
