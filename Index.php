<?php

spl_autoload_register(function($class_name) {
    require 'classes/'.$class_name . '.php';
});





//Les rôles dans film
$roleFilm = new Role("Han Solo");
$roleAmericainGraf = new Role("Steve Bolander");



//Les genres des films
$genreFilm = new Genre("Science-fiction");
$AmericainGraffitGenre = new Genre("Comédie");

//Les realisateurs
$realisation = new Realisateur("George", "Lucas", "Masculin", "14-05-1944");

//Les acteur
$acteurFilm = new Acteur("Harrison", "Ford", "Masculin", "13-07-1942", $roleFilm);
$acteurFilmOne = new Acteur("Ron", "Howard", "Masculin", "01-03-1954", $roleAmericainGraf);

//Tous les films
$starWars = new Film("Star Wars Episode 4", "1977", "121", "La guerre civile fait rage entre l'Empire galactique et l'Alliance rebelle. Capturée par les troupes de choc de l'Empereur menées par le sombre et impitoyable Dark Vador, la princesse Leia Organa dissimule les plans de l'Etoile Noire.", $realisation, $genreFilm);
$AmericanGraffiti = new Film("American Graffiti", "1973", "112", "synopsis", $realisation, $AmericainGraffitGenre);

//Le casting de film
$starWarsCasting = new Casting($acteurFilm, $roleFilm, $starWars);
$AmericanGraffitiCasting = new Casting($acteurFilm, $roleAmericainGraf, $AmericanGraffiti);



//--------------------------------------------------AFFICHAGE-----------------------------------------------

//InfoFilm
$starWars->infoFilm();
//Afficher les films d'un acteur
echo $acteurFilm->afficherFillmActeur();

//Filmographie d'un acteur
echo $roleFilm->afficherRoleActeur();


//Filmographie d'un realisateur
echo $realisation->filmographieRealisateur();

//Genres des films
echo $genreFilm->filmParGenre();
echo $AmericainGraffitGenre->filmParGenre();

//Rôle precis joué par les acteurs
echo $roleFilm->afficherActeursJoueRolePrecis();
echo $roleAmericainGraf->afficherActeursJoueRolePrecis();


