<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../assets/LoLStatsIco.png" />
    <link rel="stylesheet" href="../css/success.css">
    <link rel="stylesheet" href="../CSS/footer.css">
    <title>Utilisateur ajouté avec succès !</title>
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
    <p>L'utilisateur <?= $_GET['email'] ?> a bien été ajouté.</p>
    <p>Détails : </p>
    <p><?= $_GET['msg'] ?></p>

    <?php include './footer.php'; ?>
</body>

</html>