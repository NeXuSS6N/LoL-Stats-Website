<?php
require_once "./DB_Conn.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_POST['user_id'];

    $sqlQuery = "DELETE FROM account WHERE A_ID='$user_id'";
    mysqli_query($conn, $sqlQuery);

    // Redirection vers la page actuelle après la suppression
    header("Location: {$_SERVER['HTTP_REFERER']}");
    exit;
}
?>
