<?php

class Role {
    private string $nomPersonnage;
    private array $castings;
    private array $acteursJoueRolePrecis;

    public function __construct(string $nomPersonnage)
    {
        $this->nomPersonnage = $nomPersonnage;
        $this->castings = [];
        $this->acteursJoueRolePrecis = [];
    }

    public function __toString()
    {
        return $this->nomPersonnage;
    }

    public function ajoutActeurJoueRolePrecis(Acteur $acteurJoueRolePrecis){
        $this->acteursJoueRolePrecis[] = $acteurJoueRolePrecis;
    }

    public function afficherActeursJoueRolePrecis(){
        echo "Le role ".$this." a été joué par:<br>";
        
        foreach ($this->acteursJoueRolePrecis as $acteurJoueRolePrecis) {
            echo $acteurJoueRolePrecis."<br>";
        }
    }

    
    public function getNomPersonnage()
    {
        return $this->nomPersonnage;
    }
    public function setNomPersonnage($nomPersonnage)
    {
        $this->nomPersonnage = $nomPersonnage;

        return $this;
    }
    public function getCastings()
    {
        return $this->castings;
    }
    public function setCastings($castings)
    {
        $this->castings = $castings;

        return $this;
    }

    public function ajoutCasting(Casting $casting){
        $this->castings[] = $casting;
    }

    public function afficherRoleActeur(){
        $result = "<h4> Le rôle $this</h4>";
        foreach ($this->castings as $casting) {
            $result .= "dans un film ".$casting->getFilm()." a été incarné par ".$casting->getActeur()."<br>";
        }


        return $result;
    }



    
    public function getActeursJoueRolePrecis()
    {
        return $this->acteursJoueRolePrecis;
    }
    public function setActeursJoueRolePrecis($acteursJoueRolePrecis)
    {
        $this->acteursJoueRolePrecis = $acteursJoueRolePrecis;

        return $this;
    }
}