<?php
require_once './constList.php';
session_start();
?>

<?php

require_once "../BDD/DB_Conn.php";
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../assets/LoLStatsIco.png" />
    <link rel="stylesheet" href="../css/stats.css">
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
                <?php echo $resultats['name'] ?> : <p>&nbsp;</p>
                &nbsp;&nbsp;Popularity:&nbsp; <?php echo $resultats['popularity'] ?> %
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Victory:&nbsp;&nbsp;
                <?php echo $resultats['victory'] ?> %
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Banrate:&nbsp;&nbsp;
                <?php echo $resultats['banrate'] ?> %
            </h5>
        </div>
        <?php
    }
    ?>
    <?php include './footer.php'; ?>
</body>