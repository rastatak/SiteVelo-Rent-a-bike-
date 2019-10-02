<?php 
class bornes_ville {
    private $id_bornes_ville;

    private $borne_adresse;

    private $adresses_user_id_adress_utilisateur;

    private function __construct(int $id_bornes_ville, string $borne_adresse, int $adresses_user_id_adress_utilisateur)
    {
        $this->id_bornes_ville = $id_bornes_ville;
        $this->borne_adresse = $borne_adresse;
        $this->adresses_user_id_adress_utilisateur = $adresses_user_id_adress_utilisateur;
    }



    /**
     * Get the value of id_bornes_ville
     */ 
    public function getId_bornes_ville()
    {
        return $this->id_bornes_ville;
    }

    /**
     * Set the value of id_bornes_ville
     *
     * @return  self
     */ 
    public function setId_bornes_ville($id_bornes_ville)
    {
        $this->id_bornes_ville = $id_bornes_ville;

        return $this;
    }

    /**
     * Get the value of borne_adresse
     */ 
    public function getBorne_adresse()
    {
        return $this->borne_adresse;
    }

    /**
     * Set the value of borne_adresse
     *
     * @return  self
     */ 
    public function setBorne_adresse($borne_adresse)
    {
        $this->borne_adresse = $borne_adresse;

        return $this;
    }

    /**
     * Get the value of adresses_user_id_adress_utilisateur
     */ 
    public function getAdresses_user_id_adress_utilisateur()
    {
        return $this->adresses_user_id_adress_utilisateur;
    }

    /**
     * Set the value of adresses_user_id_adress_utilisateur
     *
     * @return  self
     */ 
    public function setAdresses_user_id_adress_utilisateur($adresses_user_id_adress_utilisateur)
    {
        $this->adresses_user_id_adress_utilisateur = $adresses_user_id_adress_utilisateur;

        return $this;
    }
}
?>