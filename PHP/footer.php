<footer>
    <hr>
    <a href="../php/accueil.php">Accueil</a>

    <?php
    if (isset($_SESSION['login'])) {
        echo '<li></li>';
    } else {
        echo '<li><a href="../php/login.php">Login</a></li>';
    }
    ?>

    <a href="../php/logout.php">Logout</a>
    <style>
        footer {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: #333;
            padding: 20px 0;
            color: #fff;
            text-align: center;
            font-family: Arial, sans-serif;
        }

        footer a {
            text-decoration: none;
            color: #fff;
            margin: 0 15px;
            transition: color 0.3s ease;
        }

        footer a:hover {
            color: #ffcc00;
        }

        .fa {
            margin-right: 5px;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        footer a {
            animation: fadeIn 0.5s ease forwards;
            animation-delay: 0.3s;
        }
    </style>
</footer>