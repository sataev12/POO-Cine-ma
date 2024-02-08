<?php

spl_autoload_register(function($class_name) {
    require 'classes/'.$class_name . '.php';
});






$roleFilm = new Role("Han Solo");

$genreFilm = new Genre("Science-fiction");
$realisation = new Realisateur("George", "Lucas", "Masculin", "14-05-1944");

$acteurFilm = new Acteur("Harrison", "Ford", "Masculin", "13-07-1942");
$starWars = new Film("Star Wars Episode 4", "1977", "121", "synopsis");

$starWarsCasting = new Casting($acteurFilm, $roleFilm, $starWars, $realisation);

echo $acteurFilm->afficherFillmActeur();
echo $realisation->afficherFillmRealisateur();
echo $roleFilm->afficherRoleActeur();


