<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
          />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Trennid</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;0,700;1,200;1,500&display=swap"
      rel="stylesheet"
          />
    <link rel="stylesheet" href="CSS/style.css" />
  </head>
  <body>
    <nav class="navbar">
      <div class="nav-content flex">
        <h1>GHG</h1>
        <div class="nav-links flex">
          <a class="nav-link" href="#">Loo konto</a>
          <a class="nav-link" href="LoginPage.php" >Logi sisse</a>
        </div>
      </div>
    </nav>
    <div class="container">
      <table class="activities-table">
        <tr>
          <th>Trenn</th>
          <th>Kus</th>
          <th>Millal</th>
          <th>Osalejate arv</th>
        </tr>
        <tr class="clickable">
          <td>Backflipping</td>
          <td>Asd1, Asdasd</td>
          <td>16:00, Esmaspäev</td>
          <td>5/20</td>
        </tr>
        <tr class="clickable">
          <td>Backflipping</td>
          <td>Asd1, Asdasd</td>
          <td>16:00, Esmaspäev</td>
          <td>5/20</td>
        </tr>
        <tr class="clickable">
          <td>Backflipping</td>
          <td>Asd1, Asdasd</td>
          <td>16:00, Esmaspäev</td>
          <td>5/20</td>
        </tr>
        <tr class="excess">
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
      </table>
      <div class="placeholder flex"><p>Valige mõni trenn, et näha detaile.</p></div>
      <div class="details-window hidden">
        <div class="details-window-content flex">
          <h2 class="activity-name">Backflipping</h2>
          <div class="details">
            <p>
              <strong>Treenija:</strong>
              Asd McAsd
            </p>
            <p>
              <strong>Kestvus:</strong>
              16:00 - 17:30
            </p>
            <p>
              <strong>Asukoht:</strong>
              Asd 1, Asdasd I korrus A101
            </p>
            <p>
              <strong>Toimub:</strong>
              Esmaspäeval (29.11.2021)
            </p>
          </div>
          <button class="btn-submit">Osalen</button>
        </div>
      </div>
      <div class="week">
        <div class="schedule-day">
          <h2 class="day-name">KOLMAPÄEV</h2>
          <ul class="day">
            <li class="activity clickable">
              <span class="name">Backflipping</span>
              <span class="time">16:00</span>
            </li>
            <li class="activity clickable">
              <span class="name">Backflipping</span>
              <span class="time">16:00</span>
            </li>
            <li class="activity clickable">
              <span class="name">Backflipping</span>
              <span class="time">16:00</span>
            </li>
            </ul>
        </div>
        <div class="schedule-day">
          <div class="day-content">
            <h2 class="day-name">ESMASPÄEV</h2>
          </div>
        </div>
        <div class="schedule-day">
          <div class="day-content">
            <h2 class="day-name">KOLMAPÄEV</h2>
          </div>
        </div>
        <div class="schedule-day">
          <div class="day-content">
            <h2 class="day-name">ESMASPÄEV</h2>
          </div>
        </div>
        <div class="schedule-day">
          <div class="day-content">
            <h2 class="day-name">ESMASPÄEV</h2>
          </div>
        </div>
        <div class="schedule-day">
          <div class="day-content">
            <h2 class="day-name">ESMASPÄEV</h2>
          </div>
        </div>
        <div class="schedule-day">
          <div class="day-content">
            <h2 class="day-name">ESMASPÄEV</h2>
          </div>
        </div>
      </div>
    </div>
    <small class="creators">
      <strong>Made by</strong><br />
      Christo Vahtramäe, Sander Paasalu, Georg Vilja<br />
      ITA19
      </small>
      <script src="../JS/main.js"></script>
  </body>
</html>
