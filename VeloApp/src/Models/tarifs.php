<?php 
class tarifs {
    private $idtarif;

    private $tarifscol;

    private $articles_idarticles;

    private $time_idtime;

    private function __construct(int $idtarif, string $tarifscol, int $articles_idarticles,int $time_idtime)
    {
        $this->idtarif = $idtarif;
        $this->tarifscol = $tarifscol;
        $this->articles_idarticles = $articles_idarticles;
        $this->time_idtime = $time_idtime;
    }



    /**
     * Get the value of idtarif
     */ 
    public function getIdtarif()
    {
        return $this->idtarif;
    }

    /**
     * Set the value of idtarif
     *
     * @return  self
     */ 
    public function setIdtarif($idtarif)
    {
        $this->idtarif = $idtarif;

        return $this;
    }

    /**
     * Get the value of tarifscol
     */ 
    public function getTarifscol()
    {
        return $this->tarifscol;
    }

    /**
     * Set the value of tarifscol
     *
     * @return  self
     */ 
    public function setTarifscol($tarifscol)
    {
        $this->tarifscol = $tarifscol;

        return $this;
    }

    /**
     * Get the value of articles_idarticles
     */ 
    public function getArticles_idarticles()
    {
        return $this->articles_idarticles;
    }

    /**
     * Set the value of articles_idarticles
     *
     * @return  self
     */ 
    public function setArticles_idarticles($articles_idarticles)
    {
        $this->articles_idarticles = $articles_idarticles;

        return $this;
    }

    /**
     * Get the value of time_idtime
     */ 
    public function getTime_idtime()
    {
        return $this->time_idtime;
    }

    /**
     * Set the value of time_idtime
     *
     * @return  self
     */ 
    public function setTime_idtime($time_idtime)
    {
        $this->time_idtime = $time_idtime;

        return $this;
    }
}
?>