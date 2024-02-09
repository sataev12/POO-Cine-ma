<?php

spl_autoload_register(function($class_name) {
    require 'classes/'.$class_name . '.php';
});






$roleFilm = new Role("Han Solo");
$roleAmericainGraf = new Role("Bob Falfa");

$genreFilm = new Genre("Science-fiction");
$realisation = new Realisateur("George", "Lucas", "Masculin", "14-05-1944");


$acteurFilm = new Acteur("Harrison", "Ford", "Masculin", "13-07-1942", $roleFilm);
//Tous les films
$starWars = new Film("Star Wars Episode 4", "1977", "121", "synopsis", $realisation, $genreFilm);
$AmericanGraffiti = new Film("American Graffiti", "1973", "112", "synopsis", $realisation, $genreFilm);


$starWarsCasting = new Casting($acteurFilm, $roleFilm, $starWars);
$AmericanGraffitiCasting = new Casting($acteurFilm, $roleAmericainGraf, $AmericanGraffiti);

//Execute des méthode pour afficher les informations neccessaire
echo $acteurFilm->afficherFillmActeur();
echo $roleFilm->afficherRoleActeur();
echo $realisation->filmographieRealisateur();
echo $genreFilm->filmParGenre();
echo $roleFilm->afficherActeursJoueRolePrecis();


