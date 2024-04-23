<?php session_start();
?>


<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/login.css">
  <title>Sign In</title>
</head>

<body>
  <nav>
    <div class="nav-content">
      <div class="logo">
        <a href="./accueil.php">Lol Stats</a>
      </div>
      <ul class="nav-links">
        <li><a href="./accueil.php">Accueil</a></li>

        <?php
        if (isset($_SESSION['login'])) {
          echo '<li><a href="./profil.php">' . $_SESSION['login'] . '</a></li>';
          header("Location: ./profil.php");
        } else {
          echo '<li><a href="./login.php">Connexion</a></li>';
        }
        ?>
      </ul>
    </div>
  </nav>

  <div class="login-container">
    <h2>Connexion</h2>
    <form action="../BDD/auth.php" method="POST">
      <div class="input-group">
        <label for="username">Nom d'utilisateur</label>
        <input type="text" id="username" name="login" required>
      </div>
      <div class="input-group">
        <label for="password">Mot de passe</label>
        <input type="password" id="password" name="password" required>
      </div>
      <button type="submit">Se connecter</button>
    </form>
    <p>Vous n'avez pas de compte ? <a href="./sign-up.php">Cliquez ici</a> pour vous inscrire.</p>
  </div>
  <?php include './footer.php'; ?>
</body>

</html>