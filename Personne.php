<?php

class Personne {
    protected string $nom;
    protected string $prenom;
    protected string $sexe;
    protected DateTime $dateNaissance;

    public function __construct(string $nom, string $prenom, string $sexe, string $dateNaissance)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->sexe = $sexe;
        $this->dateNaissance = new DateTime($dateNaissance);
    }

    

   
    public function getNom()
    {
        return $this->nom;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }
    public function getPrenom()
    {
        return $this->prenom;
    }
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }
    public function getSexe()
    {
        return $this->sexe;
    }
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }
}