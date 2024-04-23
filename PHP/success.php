<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/accueil.css">
    <link rel="stylesheet" href="../css/success.css">
    <title>Utilisateur ajouté avec succès !</title>
</head>
<body>
<nav>
        <div class="nav-content">
            <div class="logo">
                <a href="../php/accueil.php">ArcadeLab</a>
            </div>
            <ul class="nav-links">
                <li><a href="../php/accueil.php">Accueil</a></li>
                <li><a href="../php/jeux.php">Jeux</a></li>

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
    <p>L'utilisateur <?=$_GET['email']?> a bien été ajouté.</p>
    <p>Détails : </p>
    <p><?=$_GET['msg']?></p>

    <?php include 'footer.php'; ?>
</body>
</html>