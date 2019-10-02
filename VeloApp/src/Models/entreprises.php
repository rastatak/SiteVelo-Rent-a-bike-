<?php 
class entreprises {
    private $identreprise;

    private $nom_entreprise;

    private $numeroRCS;

    private $adresse_entreprise;

    private $ville_entreprise;

    private $cp_entreprise;

    private $types_utilisateur_iduser_type;

    private function __construct(int $identreprise,string $nom_entreprise, string $numeroRCS, string $adresse_entreprise,string $ville_entreprise, int $cp_entreprise, int  $types_utilisateur_iduser_type)
    {
        $this->identreprise = $identreprise;
        $this->nom_entreprise = $nom_entreprise;
        $this->numeroRCS = $numeroRCS;
        $this->adresse_entreprise = $adresse_entreprise;
        $this->ville_entreprise = $ville_entreprise;
        $this->cp_entreprise = $cp_entreprise;
        $this->types_utilisateur_iduser_type = $types_utilisateur_iduser_type;
    }


}
?>