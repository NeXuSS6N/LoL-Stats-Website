<?php session_start();
?>
<?php if ((isset($_SESSION["Loggedin"]) === false) || (($_SESSION['Id']) === 100)) {
  header("Location: ../php/accueil.php");
  exit;
}
?>

<?php

require_once "./DB_Conn.php";


$sqlQuery = "SELECT * FROM account";


$resultat = mysqli_query($conn, $sqlQuery);

foreach ($resultat as $resultats) {
  ?>
  <link rel="stylesheet" href="../css/users.css">

  <div>
    <h5>
      <?php echo $resultats['A_Username'] ?>
      <?php echo $resultats['A_Mail'] ?>
      <?php echo $resultats['A_Mdp'] ?>
    </h5>
    <!-- Formulaire pour modifier les informations de l'utilisateur -->
    <form method="post" action="update_user.php">
      <input type="hidden" name="user_id" value="<?php echo $resultats['A_Id'] ?>">
      <input type="text" name="new_username" placeholder="Nouveau nom d'utilisateur">
      <input type="email" name="new_email" placeholder="Nouvelle adresse e-mail">
      <input type="password" name="new_password" placeholder="Nouveau mot de passe">
      <button type="submit">Modifier</button>
    </form>
    <!-- Formulaire pour supprimer l'utilisateur -->
    <form method="post" action="delete_user.php">
      <input type="hidden" name="user_id" value="<?php echo $resultats['A_Id'] ?>">
      <button type="submit">Supprimer</button>
    </form>
  </div>
  <?php
}
?>

<!-- Formulaire pour ajouter un nouvel utilisateur -->
<form method="post" action="add_user.php">
  <input type="text" name="username" placeholder="Nom d'utilisateur">
  <input type="email" name="email" placeholder="Adresse e-mail">
  <input type="password" name="password" placeholder="Mot de passe">
  <button type="submit">Ajouter utilisateur</button>
</form>
</div>