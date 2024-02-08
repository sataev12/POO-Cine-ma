<?php

class Role {
    private string $nomPersonnage;
    private array $castings;

    public function __construct(string $nomPersonnage)
    {
        $this->nomPersonnage = $nomPersonnage;
        $this->castings = [];
    }


    public function __toString()
    {
        return $this->nomPersonnage;
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


}