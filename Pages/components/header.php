<nav class="navbar">
    <div class="nav-content flex">
    <a href="main.php" class="nav-title"><h1>VOCO</h1></a>
        <ul class="nav-links flex">
            <?php
            if ($_SESSION['status']){
                echo(
                    '<li class="nav-link">
                        <a href="login.php">Logi sisse</a>
                    </li>
                    <li class="nav-link">
                        <a href="#">Loo konto</a>
                    </li>'
                );
            } else {
                echo(
                    '<li class="nav-link">
                        <a href="#">Logi valja</a>
                    </li>'
                );
            }
        ?>
        </ul>
    </div>
</nav>