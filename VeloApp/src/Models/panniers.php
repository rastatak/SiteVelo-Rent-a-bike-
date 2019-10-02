<?php 
class panniers{
    private $id_panniers;

    private $prix_total;

    private $panier_activite;

    private $pannier_litige;

    private $utilisateur_id_utilisateur;
    

    private $articles_idarticles;

    private function __construct(int $id_panniers, int $prix_total, int $panier_activite,string  $pannier_litige,  int $utilisateur_id_utilisateur,int  $articles_idarticles)
    {
        $this->id_panniers = $id_panniers;
        $this->prix_total = $prix_total;
        $this->panier_activite = $panier_activite;
        $this->pannier_litige = $pannier_litige;
        $this->utilisateur_id_utilisateur = $utilisateur_id_utilisateur;
        $this->articles_idarticles = $articles_idarticles;
    }



    /**
     * Get the value of id_panniers
     */ 
    public function getId_panniers()
    {
        return $this->id_panniers;
    }

    /**
     * Set the value of id_panniers
     *
     * @return  self
     */ 
    public function setId_panniers($id_panniers)
    {
        $this->id_panniers = $id_panniers;

        return $this;
    }

    /**
     * Get the value of prix_total
     */ 
    public function getPrix_total()
    {
        return $this->prix_total;
    }

    /**
     * Set the value of prix_total
     *
     * @return  self
     */ 
    public function setPrix_total($prix_total)
    {
        $this->prix_total = $prix_total;

        return $this;
    }

    /**
     * Get the value of panier_activite
     */ 
    public function getPanier_activite()
    {
        return $this->panier_activite;
    }

    /**
     * Set the value of panier_activite
     *
     * @return  self
     */ 
    public function setPanier_activite($panier_activite)
    {
        $this->panier_activite = $panier_activite;

        return $this;
    }

    /**
     * Get the value of pannier_litige
     */ 
    public function getPannier_litige()
    {
        return $this->pannier_litige;
    }

    /**
     * Set the value of pannier_litige
     *
     * @return  self
     */ 
    public function setPannier_litige($pannier_litige)
    {
        $this->pannier_litige = $pannier_litige;

        return $this;
    }

    /**
     * Get the value of utilisateur_id_utilisateur
     */ 
    public function getUtilisateur_id_utilisateur()
    {
        return $this->utilisateur_id_utilisateur;
    }

    /**
     * Set the value of utilisateur_id_utilisateur
     *
     * @return  self
     */ 
    public function setUtilisateur_id_utilisateur($utilisateur_id_utilisateur)
    {
        $this->utilisateur_id_utilisateur = $utilisateur_id_utilisateur;

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
}
?>