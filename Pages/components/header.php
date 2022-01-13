<nav class="navbar">
    <div class="nav-content flex">
    <a href="main.php" class="nav-title"><h1>SMTH</h1></a>
        <ul class="nav-links flex">
            <?php
            if ($_SESSION['status']=='inactive'){
                echo(
                    '<li class="nav-link">
                        <a href="login.php" class="no-outline">Logi sisse</a>
                    </li>
                    <li class="nav-link">
                        <a href="register.php" class="no-outline">Loo konto</a>
                    </li>'
                );
            } else if($_SESSION['status']=='active') {
                echo(
                    '<li class="nav-link">
                        <a href="../Scripts/logout.php" class="no-outline" value="Logout">Logi välja</a>
                    </li>'
                );
            }
        ?>
        </ul>
    </div>
</nav>