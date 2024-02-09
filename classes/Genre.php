<?php

class Genre {
    private string $genre;
    private array $genresAssocie;
    

    public function __construct(string $genre)
    {
        $this->genre = $genre;
        $this->genresAssocie = [];
    }

    public function __toString()
    {
        return $this->genre;
    }

    public function ajoutGenreFilm(Film $genreAssocie){
        $this->genresAssocie[] = $genreAssocie;
    }

    public function filmParGenre(){
        echo "<br>". "Le genre $this est associé à films:"."<br>";

        foreach ($this->genresAssocie as $genreAssocie) {
            echo $genreAssocie."<br>";
        }
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
    public function getGenresAssocie()
    {
        return $this->genresAssocie;
    }
    public function setGenresAssocie($genresAssocie)
    {
        $this->genresAssocie = $genresAssocie;

        return $this;
    }
}