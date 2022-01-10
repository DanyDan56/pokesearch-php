<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pokesearch</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <img id="logo" src="logo.png" alt="logo pokedex" />

  <form action="find.php" method="post">
    <input type="text" name="search" id="searchbar" />
    <input type="submit" value="Afficher les pokemons trouvés">
  </form>

  <?php
  // Si on trouve des Pokemons qui correspondent à la recherche
  // On les affiche
  if (isset($pokemons)) :
  ?>
    <div id="searchlist">
      <ul id='ulSearchlist'>
        <?php
        // On affiche les Pokemons dans la liste
        foreach ($pokemons as $pokemon) :
        ?>
          <li>
            <img src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/<?= $pokemon->id; ?>.png" />
            <a href="#"><?= $pokemon->name . " [" . $pokemon->type . "]"; ?></a>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  <?php endif; ?>
</body>

</html>