<?php
class sexe {
    private $homme;

    private $femme;

    private function __construct(string $homme,string  $femme)
    {
        $this->homme = $homme;
        $this->femme = $femme;
    }

    

    /**
     * Get the value of homme
     */ 
    public function getHomme()
    {
        return $this->homme;
    }

    /**
     * Set the value of homme
     *
     * @return  self
     */ 
    public function setHomme($homme)
    {
        $this->homme = $homme;

        return $this;
    }

    /**
     * Get the value of femme
     */ 
    public function getFemme()
    {
        return $this->femme;
    }

    /**
     * Set the value of femme
     *
     * @return  self
     */ 
    public function setFemme($femme)
    {
        $this->femme = $femme;

        return $this;
    }
} 
?>