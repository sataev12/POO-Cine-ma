<?php

class Realisateur extends Personne {
    private array $listeFilms;

    public function __construct(string $nom, string $prenom, string $sexe, string $dateNaissance)
    {
        parent::__construct($nom, $prenom, $sexe, $dateNaissance);
        $this->listeFilms = [];
    }

    public function __toString()
    {
        return $this->nom." ".$this->prenom;
    }

    public function ajoutFilm(Film $film){
        $this->listeFilms[] = $film;
    }

    public function filmographieRealisateur(){
        echo "<br>". "Realisateur $this a realisé les films suivants:"."<br>";

        foreach ($this->listeFilms as $film) {
            echo $film."<br>";
        }
    }
    
    
    public function getListeFilms()
    {
        return $this->listeFilms;
    }
    public function setListeFilms($listeFilms)
    {
        $this->listeFilms = $listeFilms;

        return $this;
    }
}