<?php 
class utilisateurs {
    private $id_utilisateur;

    private $nom_utlilisateur ;

    private $prenom_utlilisateur ;

    private $date_naissance_utlilisateur ;

    private $adresse_mail_utlilisateur ;

    private $password_utlilisateur ;

    private $sexe;

    private $numeroRCS ;

    private $nom_entreprise;

    private $types_utilisateur_iduser_type;

    private $adresses_utilisateurs_id_adresses_utilisateur;

    private $CB_idCB;

    private function __construct(
        int $id_utilisateur, 
        string $nom_utlilisateur ,
        string $prenom_utlilisateur ,
        string $date_naissance_utlilisateur ,
        string $adresse_mail_utlilisateur ,
        string $password_utlilisateur ,
        int $sexe,
        string $numeroRCS ,
        string $nom_entreprise,
        int $types_utilisateur_iduser_type,
        int $adresses_utilisateurs_id_adresses_utilisateur,
        int $CB_idCB
        )
    {
        $this->id_utilisateur = $id_utilisateur;
        $this->nom_utlilisateur  = $nom_utlilisateur ;
        $this->prenom_utlilisateur  = $prenom_utlilisateur ;
        $this->date_naissance_utlilisateur  = $date_naissance_utlilisateur ;
        $this->adresse_mail_utlilisateur  = $adresse_mail_utlilisateur ;
        $this->password_utlilisateur  = $password_utlilisateur ;
        $this->sexe = $sexe;
        $this->numeroRCS  = $numeroRCS ;
        $this->nom_entreprise = $nom_entreprise;
        $this->types_utilisateur_iduser_type = $types_utilisateur_iduser_type;
        $this->adresses_utilisateurs_id_adresses_utilisateur = $adresses_utilisateurs_id_adresses_utilisateur;
        $this->CB_idCB = $CB_idCB;
    }


}