<?php

class Acteur extends Personne {
    private array $castings;
    private Role $rolePrecis;

    public function __construct(string $nom, string $prenom, string $sexe, string $dateNaissance, Role $rolePrecis)
    {
        parent::__construct($nom, $prenom, $sexe, $dateNaissance);
        $this->castings = [];
        $this->rolePrecis = $rolePrecis;

        $this->rolePrecis->ajoutActeurJoueRolePrecis($this);
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
    public function getRolePrecis()
    {
        return $this->rolePrecis;
    }
    public function setRolePrecis($rolePrecis)
    {
        $this->rolePrecis = $rolePrecis;

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