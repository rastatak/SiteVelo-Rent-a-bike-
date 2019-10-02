<?php 
class Article {
    private $idArticles;

    private $nomArticle;

    private $description_article;

    private $PRIX_article;

    private $taux_tva;

    private $type_article;

    private function __construct(int $idArticles, string $nomArticle,  string $description_article,int $PRIX_article,int $taux_tva, int $type_article)
    {
        $this->idArticles = $idArticles;
        $this->nomArticle = $nomArticle;
        $this->description_article = $description_article;
        $this->PRIX_article = $PRIX_article;
        $this->taux_tva = $taux_tva;
        $this->type_article = $type_article;
    }



    /**
     * Get the value of idArticles
     */ 
    public function getIdArticles()
    {
        return $this->idArticles;
    }

    /**
     * Set the value of idArticles
     *
     * @return  self
     */ 
    public function setIdArticles($idArticles)
    {
        $this->idArticles = $idArticles;

        return $this;
    }

    /**
     * Get the value of nomArticle
     */ 
    public function getNomArticle()
    {
        return $this->nomArticle;
    }

    /**
     * Set the value of nomArticle
     *
     * @return  self
     */ 
    public function setNomArticle($nomArticle)
    {
        $this->nomArticle = $nomArticle;

        return $this;
    }

    /**
     * Get the value of description_article
     */ 
    public function getDescription_article()
    {
        return $this->description_article;
    }

    /**
     * Set the value of description_article
     *
     * @return  self
     */ 
    public function setDescription_article($description_article)
    {
        $this->description_article = $description_article;

        return $this;
    }

    /**
     * Get the value of PRIX_article
     */ 
    public function getPRIX_article()
    {
        return $this->PRIX_article;
    }

    /**
     * Set the value of PRIX_article
     *
     * @return  self
     */ 
    public function setPRIX_article($PRIX_article)
    {
        $this->PRIX_article = $PRIX_article;

        return $this;
    }

    /**
     * Get the value of taux_tva
     */ 
    public function getTaux_tva()
    {
        return $this->taux_tva;
    }

    /**
     * Set the value of taux_tva
     *
     * @return  self
     */ 
    public function setTaux_tva($taux_tva)
    {
        $this->taux_tva = $taux_tva;

        return $this;
    }

    /**
     * Get the value of type_article
     */ 
    public function getType_article()
    {
        return $this->type_article;
    }

    /**
     * Set the value of type_article
     *
     * @return  self
     */ 
    public function setType_article($type_article)
    {
        $this->type_article = $type_article;

        return $this;
    }
}
?>