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
    <title>Loo konto</title>
</head>
<body>
    <header> 
        <?php require_once "./components/header.php" ?>
    </header>
    <div class="container flex">
        <h1 class="smth center">SMTH</h1>
        <form action="register.php" method="POST" class="flex">  
            <input type="text" class="form-input" placeholder="Email">
            <input type="text" class="form-input" placeholder="Parool">
            <input type="submit" value="Loo konto" class="form-submit center">
        </form>
    </div>
</body>
</html>