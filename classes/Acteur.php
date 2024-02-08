<?php

class Acteur extends Personne {
    private array $castings;

    public function __construct(string $nom, string $prenom, string $sexe, string $dateNaissance)
    {
        parent::__construct($nom, $prenom, $sexe, $dateNaissance);
        $this->castings = [];
    }

    
    public function __toString()
    {
        return $this->nom." ".$this->prenom;
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

    public function afficherFillmActeur(){
        $result = "<h4> Acteur $this joué dans les film suivants :</h4>";
        foreach ($this->castings as $casting) {
            $result .= $casting->getFilm()."<br>";
        }


        return $result;
    }


}