<?php 
class utilisateurs {
    private $id_utilisateur;

    private $nom_utilisateur;

    private $prenom_utilisateur;

    private $date_naissance_utilisateur;

    private $adresse_mail_utilisateur;

    private $sex_id_sexe;

    private $types_utilisateur_id_user;

    private $CB_idCB;

    private function __construct(
        int $id_utilisateur,
        string $nom_utilisateur,
        string $prenom_utilisateur,
        string  $date_naissance_utilisateur,
        string $adresse_mail_utilisateur,
        int $sex_id_sexe,
        int $types_utilisateur_id_user,
        int $CB_idCB)
    {
        $this->id_utilisateur = $id_utilisateur;
        $this->nom_utilisateur = $nom_utilisateur;
        $this->prenom_utilisateur = $prenom_utilisateur;
        $this->date_naissance_utilisateur = $date_naissance_utilisateur;
        $this->adresse_mail_utilisateur = $adresse_mail_utilisateur;
        $this->sex_id_sexe = $sex_id_sexe;
        $this->types_utilisateur_id_user = $types_utilisateur_id_user;
        $this->CB_idCB = $CB_idCB;
    }



    /**
     * Get the value of id_utilisateur
     */ 
    public function getId_utilisateur()
    {
        return $this->id_utilisateur;
    }

    /**
     * Set the value of id_utilisateur
     *
     * @return  self
     */ 
    public function setId_utilisateur($id_utilisateur)
    {
        $this->id_utilisateur = $id_utilisateur;

        return $this;
    }

    /**
     * Get the value of nom_utilisateur
     */ 
    public function getNom_utilisateur()
    {
        return $this->nom_utilisateur;
    }

    /**
     * Set the value of nom_utilisateur
     *
     * @return  self
     */ 
    public function setNom_utilisateur($nom_utilisateur)
    {
        $this->nom_utilisateur = $nom_utilisateur;

        return $this;
    }

    /**
     * Get the value of prenom_utilisateur
     */ 
    public function getPrenom_utilisateur()
    {
        return $this->prenom_utilisateur;
    }

    /**
     * Set the value of prenom_utilisateur
     *
     * @return  self
     */ 
    public function setPrenom_utilisateur($prenom_utilisateur)
    {
        $this->prenom_utilisateur = $prenom_utilisateur;

        return $this;
    }

    /**
     * Get the value of date_naissance_utilisateur
     */ 
    public function getDate_naissance_utilisateur()
    {
        return $this->date_naissance_utilisateur;
    }

    /**
     * Set the value of date_naissance_utilisateur
     *
     * @return  self
     */ 
    public function setDate_naissance_utilisateur($date_naissance_utilisateur)
    {
        $this->date_naissance_utilisateur = $date_naissance_utilisateur;

        return $this;
    }

    /**
     * Get the value of adresse_mail_utilisateur
     */ 
    public function getAdresse_mail_utilisateur()
    {
        return $this->adresse_mail_utilisateur;
    }

    /**
     * Set the value of adresse_mail_utilisateur
     *
     * @return  self
     */ 
    public function setAdresse_mail_utilisateur($adresse_mail_utilisateur)
    {
        $this->adresse_mail_utilisateur = $adresse_mail_utilisateur;

        return $this;
    }

    /**
     * Get the value of sex_id_sexe
     */ 
    public function getSex_id_sexe()
    {
        return $this->sex_id_sexe;
    }

    /**
     * Set the value of sex_id_sexe
     *
     * @return  self
     */ 
    public function setSex_id_sexe($sex_id_sexe)
    {
        $this->sex_id_sexe = $sex_id_sexe;

        return $this;
    }

    /**
     * Get the value of types_utilisateur_id_user
     */ 
    public function getTypes_utilisateur_id_user()
    {
        return $this->types_utilisateur_id_user;
    }

    /**
     * Set the value of types_utilisateur_id_user
     *
     * @return  self
     */ 
    public function setTypes_utilisateur_id_user($types_utilisateur_id_user)
    {
        $this->types_utilisateur_id_user = $types_utilisateur_id_user;

        return $this;
    }

    /**
     * Get the value of CB_idCB
     */ 
    public function getCB_idCB()
    {
        return $this->CB_idCB;
    }

    /**
     * Set the value of CB_idCB
     *
     * @return  self
     */ 
    public function setCB_idCB($CB_idCB)
    {
        $this->CB_idCB = $CB_idCB;

        return $this;
    }
}

?>