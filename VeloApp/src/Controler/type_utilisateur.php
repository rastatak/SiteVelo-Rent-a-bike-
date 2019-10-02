<?php
class types_utilisateur {
    private $iduser_type;

    private $membre_entreprise;

    private function __construct(int $iduser_type,int  $membre_entreprise)
    {
        $this->iduser_type = $iduser_type;
        $this->membre_entreprise = $membre_entreprise;
    }



    /**
     * Get the value of iduser_type
     */ 
    public function getIduser_type()
    {
        return $this->iduser_type;
    }

    /**
     * Set the value of iduser_type
     *
     * @return  self
     */ 
    public function setIduser_type($iduser_type)
    {
        $this->iduser_type = $iduser_type;

        return $this;
    }

    /**
     * Get the value of membre_entreprise
     */ 
    public function getMembre_entreprise()
    {
        return $this->membre_entreprise;
    }

    /**
     * Set the value of membre_entreprise
     *
     * @return  self
     */ 
    public function setMembre_entreprise($membre_entreprise)
    {
        $this->membre_entreprise = $membre_entreprise;

        return $this;
    }
}
?>