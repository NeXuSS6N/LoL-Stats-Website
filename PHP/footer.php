<footer>
    <div class="footer-content">
        <div class="footer-links">
            <a href="./accueil.php">Accueil</a>
            <?php
            if (isset($_SESSION['login'])) {
                echo '<p></p>';
            } else {
                echo '<p><a href="./login.php">Login</a></p>';
            }
            ?>
            <a href="../BDD/logout.php">Logout</a>
        </div>
    </div>
</footer>