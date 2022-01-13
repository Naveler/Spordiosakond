<?php
    session_start();
  require_once "../Scripts/training.php";
  $trainings = GetTraining();
  if(!isset($_SESSION['status'])){
      $_SESSION['status'] = 'inactive';
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./CSS/universals.css">
    <link rel="stylesheet" href="./CSS/style.css" />
    <title>Document</title>
  </head>
  <body>
    <header>
      <?php require_once("./components/header.php") ?>
    </header>
    <div class="container flex">
      <div class="activities-view grid">
        <div class="activities double-outline">
          <table cellspacing="0" cellpadding="0">
            <tr>
              <th></th>
              <th>Nimi</th>
              <th>Toimumiskoht</th>
              <th>Osalejate arv</th>
            </tr>
            <tr>
              <td>17:00</td>
              <td>Backflipping</td>
              <td>TÜ Raamatukogu 11</td>
              <td>10/10</td>
            </tr>
            <tr class="signed-up">
              <td>17:00</td>
              <td>Frontflipping</td>
              <td>Emajõgi, Tartu</td>
              <td>1/10</td>
            </tr>
            <tr class="signed-up">
              <td>18:00</td>
              <td>Sideflipping</td>
              <td>Õnne 13, Eesti</td>
              <td>13/15</td>
            </tr>
            <tr>
              <td>18:30</td>
              <td>Upflipping</td>
              <td>Lõunakeskus, Lõuna</td>
              <td>0/10</td>
            </tr>
            <tr>
              <td>19:00</td>
              <td>Downflipping</td>
              <td>High Hrothgar, Skyrim</td>
              <td>6/30</td>
            </tr>
            <tr class="signed-up">
              <td>19:45</td>
              <td>Professionaalne saagimine</td>
              <td>K-rauta, Helsinki</td>
              <td>8/15</td>
            </tr>
            <tr class="excess">
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
          </table>
        </div>
        <div class="details-placeholder flex">
          <p>Vajutage treeningu peale, et näha detaile</p>
        </div>
        <div class="details double-outline" id="details">
          <span class="close-btn" id="closeBtn"></span>
        </div>
      </div>
      <div class="week grid">
        <button class="day double-outline no-outline flex has-activities">
          <span class="day-name">Esmaspäev</span>
        </button>
        <button class="day double-outline no-outline flex has-activities">
          <span class="day-name">Teisipäev</span>
        </button>
        <button class="day double-outline no-outline flex">
          <span class="day-name">Kolmapäev</span>
        </button>
        <button class="day double-outline no-outline flex">
          <span class="day-name">Neljapäev</span>
        </button>
        <button class="day double-outline no-outline flex current-day has-activities">
          <span class="day-name">Reede</span>
        </button>
        <button class="day double-outline no-outline flex">
          <span class="day-name">Laupäev</span>
        </button>
        <button class="day double-outline no-outline flex">
          <span class="day-name">Pühapäeva</span>
        </button>
      </div>
      <div class="quick-summary">
        <div class="today double-outline">
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
        <div class="tomorrow double-outline">
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
    <script src="../JS/main.js"></script>
  </body>
</html>
