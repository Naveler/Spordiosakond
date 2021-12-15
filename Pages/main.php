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
        <div class="day element clickable flex has-activities">
          <span class="day-name">Esmaspäev</span>
          <span class="activity-amount">10</span>
        </div>
        <div class="day element clickable flex has-activities">
          <span class="day-name">Teisipäev</span>
          <span class="activity-amount">7</span>
        </div>
        <div class="day element clickable flex">
          <span class="day-name">Kolmapäev</span>
          <span class="activity-amount">0</span>
        </div>
        <div class="day element clickable flex">
          <span class="day-name">Neljapäev</span>
          <span class="activity-amount">0</span>
        </div>
        <div class="day element clickable flex current-day has-activities">
          <span class="day-name">Reede</span>
          <span class="activity-amount">2</span>
        </div>
        <div class="day element clickable flex">
          <span class="day-name">Laupäev</span>
          <span class="activity-amount">0</span>
        </div>
        <div class="day element clickable flex">
          <span class="day-name">Pühapäeva</span>
          <span class="activity-amount">0</span>
        </div>
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
