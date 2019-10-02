<?php 
class cb {
    private $idCB;

    private $CB_number;

    private $CB_name;

    private $CB_validdate;
    

    private $CB_active;

    private function __construct(int $idCB, string $CB_number,string $CB_name, string $CB_validdate,int $CB_active)
    
    {
        $this->idCB = $idCB;
        $this->CB_number = $CB_number;
        $this->CB_name = $CB_name;
        $this->CB_validdate 
        = $CB_validdate;
        
        $this->CB_active = $CB_active;
    }



    /**
     * Get the value of idCB
     */ 
    public function getIdCB()
    {
        return $this->idCB;
    }

    /**
     * Set the value of idCB
     *
     * @return  self
     */ 
    public function setIdCB($idCB)
    {
        $this->idCB = $idCB;

        return $this;
    }

    /**
     * Get the value of CB_number
     */ 
    public function getCB_number()
    {
        return $this->CB_number;
    }

    /**
     * Set the value of CB_number
     *
     * @return  self
     */ 
    public function setCB_number($CB_number)
    {
        $this->CB_number = $CB_number;

        return $this;
    }

    /**
     * Get the value of CB_name
     */ 
    public function getCB_name()
    {
        return $this->CB_name;
    }

    /**
     * Set the value of CB_name
     *
     * @return  self
     */ 
    public function setCB_name($CB_name)
    {
        $this->CB_name = $CB_name;

        return $this;
    }

    /**
     * Get the value of CB_active
     */ 
    public function getCB_active()
    {
        return $this->CB_active;
    }

    /**
     * Set the value of CB_active
     *
     * @return  self
     */ 
    public function setCB_active($CB_active)
    {
        $this->CB_active = $CB_active;

        return $this;
    }
}
?>