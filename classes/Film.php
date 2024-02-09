<?php

class Film {
    private string $titre;
    private DateTime $dateSortie;
    private int $duree;
    private string $resumee;
    private array $castings;
    private Realisateur $realisateur;
    private Genre $genre;
    
    
    

    public function __construct(string $titre, string $dateSortie, int $duree, 
    string $resumee, Realisateur $realisateur, Genre $genre)
    {
        $this->titre = $titre;
        $this->dateSortie = new DateTime($dateSortie);
        $this->duree = $duree;
        $this->resumee = $resumee;
        $this->realisateur = $realisateur;
        $this->realisateur->ajoutFilm($this);
        $this->genre = $genre;
        $this->genre->ajoutGenreFilm($this);
        $this->castings = [];
    }
    
    public function __toString()
    {
        return $this->titre;
    }


    
    public function getTitre()
    {
        return $this->titre;
    }
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }
    public function getDateSortie()
    {
        return $this->dateSortie;
    }
    public function setDateSortie($dateSortie)
    {
        $this->dateSortie = $dateSortie;

        return $this;
    }
    public function getDuree()
    {
        return $this->duree;
    }
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }
    public function getResumee()
    {
        return $this->resumee;
    }
    public function setResumee($resumee)
    {
        $this->resumee = $resumee;

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
    public function getRealisateur()
    {
        return $this->realisateur;
    }
    public function setRealisateur($realisateur)
    {
        $this->realisateur = $realisateur;

        return $this;
    }


    public function ajoutCasting(Casting $casting){
        $this->castings[] = $casting;
    }


    

    
    
}