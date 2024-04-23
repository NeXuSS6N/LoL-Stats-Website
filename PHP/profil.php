<?php
session_start();
echo $_SESSION['login'];
echo $_SESSION['Id'];
if (isset($_SESSION["LoggedIn"])) {
  $user = $_SESSION["LoggedIn"];
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/profil.css">
  <title>Profil</title>
</head>

<body>
  <nav>
    <div class="nav-content">
      <div class="logo">
        <a href="./accueil.php">LoL Stats</a>
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
  <div class="profil">
    <div class="profil-text">
      <h2>Profil de
        <?php echo $_SESSION['login']; ?>
      </h2>
      <?php if ($_SESSION['Id'] === 999): ?>

        <?php require_once "./users.php" ?>
      <?php endif; ?>

      <div class="profil-image">
        <img src="../assets/default.png">
      </div>
    </div>
  </div>
  <?php include './footer.php'; ?>
</body>

</html>