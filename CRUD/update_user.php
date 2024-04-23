<?php
require_once "./DB_Conn.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_POST['user_id'];
    $new_username = $_POST['new_username'];
    $new_email = $_POST['new_email'];
    $new_password = $_POST['new_password'];

    $sqlQuery = "UPDATE account SET A_Username='$new_username', A_Mail='$new_email', A_Mdp='$new_password' WHERE A_ID='$user_id'";
    mysqli_query($conn, $sqlQuery);

    // Redirection vers la page actuelle après la mise à jour
    header("Location: {$_SERVER['HTTP_REFERER']}");
    exit;
}
?>