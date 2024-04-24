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
    <link rel="stylesheet" href="../css/stats.css">
    <link rel="stylesheet" href="../css/footer.css">
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
    <?php include './footer.php'; ?>
</body>

<?php

$sqlQuery = "SELECT * FROM champions";


$resultat = mysqli_query($conn, $sqlQuery);



foreach ($resultat as $resultats) {
    ?>
    <link rel="stylesheet" href="../css/users.css">

    <div class="stats-content">
        <h5>
            <?php echo $resultats['name'] ?>
            <?php echo $resultats['popularity'] ?>
            <?php echo $resultats['victory'] ?>
            <?php echo $resultats['banrate'] ?>
        </h5>
    </div>
    <?php
}
?>