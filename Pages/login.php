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
    <link rel="stylesheet" href="./CSS/universals.css">
    <link rel="stylesheet" href="./CSS/form.css">
    <title>Logi sisse</title>
</head>
<body>
    <header> 
        <?php require_once "./components/header.php" ?>
    </header>
    <div class="container flex">
        <h1 class="smth center">Logi sisse</h1>
        <form action="../Scripts/login.php" method="POST" class="flex">
            <input type="email" class="form-input no-outline" placeholder="Email" required>
            <input type="text" class="form-input no-outline" placeholder="Parool" required>
            <input type="submit" value="Logi sisse" class="form-submit center no-outline">
        </form>
    </div>
</body>
</html>