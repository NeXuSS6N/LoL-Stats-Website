<?php
require_once './constList.php';
session_start();
?>
<?php echo var_dump($_SESSION) ?>

<?php
if (
    (isset($_SESSION['LoggedIn']) === false) ||
    (
        isset($_SESSION['Id']) &&
        $_SESSION['Id'] != 999)
) {
    header("Location: ./statsjoueurs.php");
    exit;
}
?>

<?php

require_once "../BDD/DB_Conn.php";


$sqlQuery = "SELECT * FROM champions";


$resultat = mysqli_query($conn, $sqlQuery);

foreach ($resultat as $resultats) {
    ?>
    <link rel="stylesheet" href="../css/users.css">

    <div>
        <h5>
            <?php echo $resultats['id'] ?>
            <?php echo $resultats['name'] ?>
            <?php echo $resultats['popularity'] ?>
            <?php echo $resultats['victory'] ?>
            <?php echo $resultats['banrate'] ?>
        </h5>
        <!-- Formulaire pour modifier les informations de l'utilisateur -->
        <form method="post" action="../CRUD/update_champ.php">
            <input type="hidden" name="user_id" value="<?php echo $resultats['id'] ?>">
            <input type="text" name="new_popularity" placeholder="new new popularity">
            <input type="text" name="new_victory" placeholder="new victory rate">
            <input type="text" name="new_banrate" placeholder="new banrate">
            <button type="submit">Modifier</button>
        </form>
        <!-- Formulaire pour supprimer l'utilisateur -->
        <form method="post" action="../CRUD/delete_champ.php">
            <input type="hidden" name="user_id" value="<?php echo $resultats['id'] ?>">
            <button type="submit">Supprimer</button>
        </form>
    </div>
    <?php
}
?>

<!-- Formulaire pour ajouter un nouvel utilisateur -->
<form method="post" action="../CRUD/add_champ.php">
    <input type="text" name="name" placeholder="Nom du champion">
    <input type="text" name="popularity" placeholder="Taux de popularité">
    <input type="text" name="victory" placeholder="Taux de victoire">
    <input type="text" name="banrate" placeholder="Taux de banrate">
    <button type="submit">Ajouter Champion</button>
</form>
</div>