<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/accueil.css">
  <title>Accueil</title>
</head>

<body><?php echo var_dump($_SESSION) ?>

  <nav>
    <div class="nav-content">
      <div class="logo">
        <a href="./accueil.php">Lol Stats</a>
      </div>
      <ul class="nav-links">
        <li><a href="./accueil.php">Accueil</a></li>
        <li><a href="./stats.php">Statistiques</a></li>

        <?php
        if (isset($_SESSION['login'])) {
          echo '<li><a href="./profil.php">' . $_SESSION['login'] . '</a></li>';
        } else {
          echo '<li><a href="./login.php">Connexion</a></li>';
        }
        ?>

      </ul>
    </div>
  </nav>
  <?php include './footer.php'; ?>
</body>

</html>