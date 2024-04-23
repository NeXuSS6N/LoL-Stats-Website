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

<body>
  <?php
  session_start();
  ?>
  <nav>
    <div class="nav-content">
      <div class="logo">
        <a href="./accueil.php">Lol Stats</a>
      </div>
      <ul class="nav-links">
        <li><a href="./accueil.php">Accueil</a></li>
        <li><a href="./stas.php">Statistiques</a></li>

        <?php
        if (isset($_SESSION['login'])) {
          echo '<li><a href="../php/profil.php">' . $_SESSION['login'] . '</a></li>';
        } else {
          echo '<li><a href="../php/login.php">Connexion</a></li>';
        }
        ?>

      </ul>
    </div>
  </nav>

  <div class="home">
    <div class="text">
      <h2>Scoreboard</h2>
      <select id="jeux">
        <option value="World Of Warcraft">World Of Warcraft</option>
        <option value="Souls Breaker">Souls Breaker</option>
        <option value="League Of Legends">League Of Legends</option>
      </select>
      <div id="scoreboard">
      </div>
    </div>
  </div>
  <script src="../js/scoreboard.js"></script>
  <?php include 'footer.php'; ?>
</body>

</html>