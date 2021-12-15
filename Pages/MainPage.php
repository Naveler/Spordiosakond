<?php
    require "../Scripts/session.php";
    $session = new Session;
    $session->createSession();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=League+Script&family=Meow+Script&family=Poppins:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./CSS/variables.css">
    <link rel="stylesheet" href="./CSS/style.css" />
    <title>Document</title>
  </head>
  <body>
    <header>
      <?php require_once("./components/header.php") ?>
    </header>
    <div class="container flex">
      <div class="activities-view grid">
        <div class="activities element"></div>
        <div class="details element"></div>
      </div>
      <div class="week grid">
        <div class="day element clickable flex has-activities">E</div>
        <div class="day element clickable flex has-activities">T</div>
        <div class="day element clickable flex">K</div>
        <div class="day element clickable flex">N</div>
        <div class="day element clickable flex current-day has-activities">R</div>
        <div class="day element clickable flex">L</div>
        <div class="day element clickable flex">P</div>
      </div>
      <div class="quick-summary">
        <div class="today element">
          <h3>Täna</h3>
          <ul>
            <li>
              <h4>Backflipping</h4>
              <p>16:00</p>
            </li>
            <li>
              <h4>Backflipping</h4>
              <p>16:00</p>
            </li>
            <li>
              <h4>Backflipping</h4>
              <p>16:00</p>
            </li>
          </ul>
        </div>
        <div class="tomorrow element">
          <h3>Homme</h3>
          <ul>
            <li>
              <h4>Backflipping</h4>
              <p>16:00</p>
            </li>
            <li>
              <h4>Backflipping</h4>
              <p>16:00</p>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </body>
</html>
