<?php 
class adress_user {
    private $id_adress_user;

    private $numero;

    private $rue;

    private $extension;

    private $villes_user_id_ville;

    private function __construct(int $id_adress_user, int  $numero,  string $rue,string $extension,int $villes_user_id_ville)
    {
        $this->id_adress_user = $id_adress_user;
        $this->numero = $numero;
        $this->rue = $rue;
        $this->extension = $extension;
        $this->villes_user_id_ville = $villes_user_id_ville;
    }

    /**
     * Get the value of id_adress_user
     */ 
    public function getId_adress_user()
    {
        return $this->id_adress_user;
    }

    /**
     * Set the value of id_adress_user
     *
     * @return  self
     */ 
    public function setId_adress_user($id_adress_user)
    {
        $this->id_adress_user = $id_adress_user;

        return $this;
    }

    /**
     * Get the value of numero
     */ 
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set the value of numero
     *
     * @return  self
     */ 
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get the value of rue
     */ 
    public function getRue()
    {
        return $this->rue;
    }

    /**
     * Set the value of rue
     *
     * @return  self
     */ 
    public function setRue($rue)
    {
        $this->rue = $rue;

        return $this;
    }

    /**
     * Get the value of extension
     */ 
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * Set the value of extension
     *
     * @return  self
     */ 
    public function setExtension($extension)
    {
        $this->extension = $extension;

        return $this;
    }

    /**
     * Get the value of villes_user_id_ville
     */ 
    public function getVilles_user_id_ville()
    {
        return $this->villes_user_id_ville;
    }

    /**
     * Set the value of villes_user_id_ville
     *
     * @return  self
     */ 
    public function setVilles_user_id_ville($villes_user_id_ville)
    {
        $this->villes_user_id_ville = $villes_user_id_ville;

        return $this;
    }
}
?>