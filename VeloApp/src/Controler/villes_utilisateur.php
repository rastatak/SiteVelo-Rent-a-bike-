<?php 
class villes_utilisateur {
    private $id_ville;

    private $nom_ville;

    private $ville_activite;

    private function __construct(int $id_ville,string  $nom_ville, int $ville_activite)
    {
        $this->id_ville = $id_ville;
        $this->nom_ville = $nom_ville;
        $this->ville_activite = $ville_activite;
    }



    /**
     * Get the value of id_ville
     */ 
    public function getId_ville()
    {
        return $this->id_ville;
    }

    /**
     * Set the value of id_ville
     *
     * @return  self
     */ 
    public function setId_ville($id_ville)
    {
        $this->id_ville = $id_ville;

        return $this;
    }

    /**
     * Get the value of nom_ville
     */ 
    public function getNom_ville()
    {
        return $this->nom_ville;
    }

    /**
     * Set the value of nom_ville
     *
     * @return  self
     */ 
    public function setNom_ville($nom_ville)
    {
        $this->nom_ville = $nom_ville;

        return $this;
    }

    /**
     * Get the value of ville_activite
     */ 
    public function getVille_activite()
    {
        return $this->ville_activite;
    }

    /**
     * Set the value of ville_activite
     *
     * @return  self
     */ 
    public function setVille_activite($ville_activite)
    {
        $this->ville_activite = $ville_activite;

        return $this;
    }
}
?>