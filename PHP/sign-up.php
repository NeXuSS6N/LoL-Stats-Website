<?php session_start(); ?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/accueil.css">
    <link rel="stylesheet" href="../css/sign-up.css">
    <link rel="stylesheet" href="../css/footer.css">
    <title>Sign Up</title>
</head>
<body>

  <nav>
    <div class="nav-content">
      <div class="logo">
        <a href="./accueil.php">ArcadeLab</a>
      </div>
      <ul class="nav-links">
        <li><a href="../php/accueil.php">Accueil</a></li>
        <li><a href="../php/jeux.php">Jeux</a></li>
        <li><a href="../php/login.php">Connexion</a></li>
      </ul>
    </div>
  </nav>
  
    <div class="login-container">
        <h2>Créer un compte</h2>
        <form action="./addUser.php" method="POST">
          <div class="input-group">
            <label for="username">Nom d'utilisateur</label>
            <input type="text" id="username" name="login" required value="">
          </div>
          <div class="input-group">
            <label for="email">Adresse email</label>
            <input type="email" id="email" name="email" required value="">
          </div>
          <div class="input-group"> 
            <label for="password">Mot de passe</label>
            <input type="password" id="password" name="password" required value="">
          </div>
          <div class="input-group">
            <label for="confirm_password">Confirmer le mot de passe</label>
            <input type="password" id="confirm_password" name="password_check" required value="">
          </div>
          <button type="submit">Créer un compte</button>
        </form>
        <p>Déjà un membre ? <a href="./login.php">Connectez-vous ici</a>.</p>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>
