<?php
    require "../Scripts/session.php";
    $session = new Session;
    $session->createSession();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/variables.css" />
    <link rel="stylesheet" href="CSS/login.css" />
    <title>Logi sisse</title>
</head>
<body>
    <header>
      <?php require_once("./components/header.php") ?>
    </header>
    <form class="background" method="POST" action="../Scripts/login.php">
        <input type="text" placeholder="Email" name="email" required>
        <input type="password" name="parool" placeholder="Parool" required>
        <input class="button" type="submit" value="Logi sisse">
    </form>
</body>
</html>