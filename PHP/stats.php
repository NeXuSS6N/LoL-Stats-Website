<?php
require_once './constList.php';
session_start();
?>

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
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/stats.css">
    <style>
        /* Style de base pour le footer */
        footer {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
            width: 100%;
            bottom: 0;
            left: 0;
            position: relative
        }


        .footer-links a {
            color: #fff;
            /* Couleur du texte des liens */
            text-decoration: none;
            /* Supprimer le soulignement par défaut */
            margin-right: 20px;
            /* Espacement des liens */
        }

        .footer-links a:hover {
            text-decoration: underline;
            /* Souligner les liens au survol */
        }

        .footer-info p {
            margin: 5px 0;
            /* Espacement entre les éléments */
        }
    </style>
    <title>Statistiques</title>
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

    <?php

    $sqlQuery = "SELECT * FROM champions";


    $resultat = mysqli_query($conn, $sqlQuery);

    foreach ($resultat as $resultats) {
        ?>
        <link rel="stylesheet" href="../css/users.css">

        <div class="stats-content">
            <h5>
                <?php echo $resultats['name']  ?> 
                <?php echo $resultats['popularity'] ?>
                <?php echo $resultats['victory'] ?>
                <?php echo $resultats['banrate']  ?>
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
    <div class="stats-content">
        <!-- Formulaire pour ajouter un nouvel utilisateur -->
        <form method="post" action="../CRUD/add_champ.php">
            <input type="text" name="name" placeholder="Nom du champion">
            <input type="text" name="popularity" placeholder="Taux de popularité">
            <input type="text" name="victory" placeholder="Taux de victoire">
            <input type="text" name="banrate" placeholder="Taux de banrate">
            <button type="submit">Ajouter Champion</button>
        </form>
    </div>
    <?php include './footer.php'; ?>
</body>