<?php

class Film {
    private string $titre;
    private DateTime $dateSortie;
    private int $duree;
    private Realisateur $realisateur;
    private Genre $genre;
    private Acteur $acteur;
    private string $resume;
    

    public function __construct(string $titre, string $dateSortie, int $duree, Realisateur $realisateur, 
    Genre $genre, Acteur $acteur, string $resume)
    {
        $this->titre = $titre;
        $this->dateSortie = new DateTime($dateSortie);
        $this->duree = $duree;
        $this->realisateur = $realisateur;
        $this->genre = $genre;
        $this->acteur = $acteur;
        $this->resume = $resume;
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
    public function getResume()
    {
        return $this->resume;
    }
    public function setResume($resume)
    {
        $this->resume = $resume;

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
    public function getRealisateur()
    {
        return $this->realisateur;
    }
    public function setRealisateur($realisateur)
    {
        $this->realisateur = $realisateur;

        return $this;
    }
    public function getGenre()
    {
        return $this->genre;
    }
    public function setGenre($genre)
    {
        $this->genre = $genre;

        return $this;
    }
    public function getActeur()
    {
        return $this->acteur;
    }
    public function setActeur($acteur)
    {
        $this->acteur = $acteur;

        return $this;
    }
}