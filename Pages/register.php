<?php
    session_start();
if ($_SESSION["status"]=='active') {
    header("Location: ../Pages/main.php");
    exit();
}
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
        <h1 class="smth center">Loo konto</h1>
        <form action="../Scripts/register.php" method="POST" class="flex">
            <input type="text" class="form-input no-outline" placeholder="email" name="email" required>
            <input type="text" class="form-input no-outline" placeholder="eesnimi" name="eesnimi" required>
            <input type="text" class="form-input no-outline" placeholder="perenimi" name="perenimi" required>
            <select class="form-input no-outline" name="role" required>
                <option value="Õpilane">Õpilane</option>
                <option value="Õpetaja">Õpetaja</option>
                <option value="Treener">Treener</option>
            </select>
            <input type="text" class="form-input no-outline" placeholder="parool" name="parool" required>
            <input type="text" class="form-input no-outline" placeholder="uuesti parool" name="uuesti_parool" required>
            <input type="submit" value="Loo konto" class="form-submit center no-outline">
        </form>
    </div>
</body>
</html>