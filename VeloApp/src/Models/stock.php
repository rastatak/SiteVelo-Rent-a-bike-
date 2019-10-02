<?php 
class stock {
    private $id_stock;

    private $date_maj;

    private $nb_velo_elec;

    private $nb_meca_loues;

    private $nb_meca_hs;

    private $nb_elec_hs;

    private function __construct(int $id_stock, string $date_maj, int $nb_velo_elec, int $nb_meca_loues, int $nb_meca_hs, int $nb_elec_hs)
    {
        $this->id_stock = $id_stock;
        $this->date_maj = $date_maj;
        $this->nb_velo_elec = $nb_velo_elec;
        $this->nb_meca_loues = $nb_meca_loues;
        $this->nb_meca_hs = $nb_meca_hs;
        $this->nb_elec_hs = $nb_elec_hs;
    }



    /**
     * Get the value of id_stock
     */ 
    public function getId_stock()
    {
        return $this->id_stock;
    }

    /**
     * Set the value of id_stock
     *
     * @return  self
     */ 
    public function setId_stock($id_stock)
    {
        $this->id_stock = $id_stock;

        return $this;
    }

    /**
     * Get the value of date_maj
     */ 
    public function getDate_maj()
    {
        return $this->date_maj;
    }

    /**
     * Set the value of date_maj
     *
     * @return  self
     */ 
    public function setDate_maj($date_maj)
    {
        $this->date_maj = $date_maj;

        return $this;
    }

    /**
     * Get the value of nb_velo_elec
     */ 
    public function getNb_velo_elec()
    {
        return $this->nb_velo_elec;
    }

    /**
     * Set the value of nb_velo_elec
     *
     * @return  self
     */ 
    public function setNb_velo_elec($nb_velo_elec)
    {
        $this->nb_velo_elec = $nb_velo_elec;

        return $this;
    }

    /**
     * Get the value of nb_meca_loues
     */ 
    public function getNb_meca_loues()
    {
        return $this->nb_meca_loues;
    }

    /**
     * Set the value of nb_meca_loues
     *
     * @return  self
     */ 
    public function setNb_meca_loues($nb_meca_loues)
    {
        $this->nb_meca_loues = $nb_meca_loues;

        return $this;
    }

    /**
     * Get the value of nb_meca_hs
     */ 
    public function getNb_meca_hs()
    {
        return $this->nb_meca_hs;
    }

    /**
     * Set the value of nb_meca_hs
     *
     * @return  self
     */ 
    public function setNb_meca_hs($nb_meca_hs)
    {
        $this->nb_meca_hs = $nb_meca_hs;

        return $this;
    }

    /**
     * Get the value of nb_elec_hs
     */ 
    public function getNb_elec_hs()
    {
        return $this->nb_elec_hs;
    }

    /**
     * Set the value of nb_elec_hs
     *
     * @return  self
     */ 
    public function setNb_elec_hs($nb_elec_hs)
    {
        $this->nb_elec_hs = $nb_elec_hs;

        return $this;
    }
}
?>