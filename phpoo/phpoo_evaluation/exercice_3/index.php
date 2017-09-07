<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="script.js"></script>
    <title></title>
  </head>
  <body>
    <div class="wrapper">
      <h2>Nouveau Véhicule Dans la base de donnée </h2>

      <form class="create_auto" action="" method="post">

        <p>
          <label for="marque">Marque : </label>
          <input type="text" name="marque" value="">
        </p>

        <p>
          <label for="modele">Modèle : </label>
          <input type="text" name="modele" value="">
        </p>

        <p>
          <label for="years">Année : </label>
          <input type="text" name="years" value="">
        </p>

        <p>
          <label for="couleur">Couleur : </label>
          <input type="text" name="couleur" value="">
        </p>

        <input type="submit" name="valide_auto" value="Valider">

      </form>

      <p class="return"></p>
    </div>
  </body>
</html>
