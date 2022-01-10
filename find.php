<?php
// On recupère la recherche
$name = $_POST["search"];

// A rentrer en base de donnée
$bulbasaur = [
  "id" => 1,
  "name" => "bulbasaur"
];
$blastoise = [
  "id" => 9,
  "name" => "blastoise"
];
$butterfree = [
  "id" => 12,
  "name" => "butterfree"
];

// Tableau comprenant tous les sPokemons
$all = [$bulbasaur, $blastoise, $butterfree];
// Tableau qui contient le résultat de la recherche
$pokemons = [];

// On bloucle sur tous les Pokemons et on recherche des correspondances
// On affiche tous les Pokemons si aucune recherche
foreach ($all as $pokemon) {
  $length = strlen($name);

  if (substr($pokemon["name"], 0, $length) === $name) {
    array_push($pokemons, $pokemon);
  }
}

require('./index.php');
