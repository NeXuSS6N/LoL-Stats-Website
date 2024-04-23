<?php
require_once './constList.php';
session_start();
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
    </div>
    <?php
}
?>