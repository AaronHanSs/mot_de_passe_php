<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Formulaire</title>
    <link rel="stylesheet" href="main.css">
  </head>

  <body>

    <?php
        if ($_POST['password'] == 'Kangourou') {

  ?>
          <h1>voici les codes confidentiel</h1>

          <p>123456789</p>
  <?php
        }

        else {
          echo htmlspecialchars("mot de passe incorrect");
        }

  ?>

  <a href="index.php">retour a l'index</a>

  </body>
</html>
