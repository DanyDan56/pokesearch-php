<?php

require('./Pokemon.php');

// On recupère la recherche
$name = $_POST["search"];

// A rentrer en base de donnée
$bulbasaur = new Pokemon(1, "bulbasaur", "plante");
$blastoise = new Pokemon(9, "blastoise", "eau");
$butterfree = new Pokemon(12, "butterfree", "normal");

// Tableau comprenant tous les sPokemons
$all = [$bulbasaur, $blastoise, $butterfree];
// Tableau qui contient le résultat de la recherche
$pokemons = [];
// On récupère la taille de la chîne de caractères de la recherche
$length = strlen($name);

// On bloucle sur tous les Pokemons et on recherche des correspondances
// On affiche tous les Pokemons si aucune recherche
foreach ($all as $pokemon) {
  if (substr($pokemon->name, 0, $length) === $name) {
    array_push($pokemons, $pokemon);
  }
}

require('./index.php');
