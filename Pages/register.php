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
    <link rel="stylesheet" href="./CSS/register.css">
    <title>Loo konto</title>
</head>
<body>
    <header> 
        <?php require_once "./components/header.php" ?>
    </header>
    <div class="container">
        <form action="register.php" method="POST" class="element flex">
            <span class="element clickable">  
                <input type="text" class="form-input">
            </span>
            <span class="element">  
                <input type="text" class="form-input">
            </span>
            <span class="element clickable">
                <input type="submit" value="Reg" class="form-input">
            </span>
        </form>
    </div>
</body>
</html>