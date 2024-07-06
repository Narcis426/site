<?php
session_start();
?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Narcis PC</title>
  <link rel="stylesheet" href="css/foundation.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>
<body>

<nav class="top-bar">
    <div class="top-bar-left">
        <ul class="dropdown menu" data-dropdown-menu>
            <li><a href="home.php" class="button"><span class="material-symbols-outlined">home</span>Acasă</a></li>
            <li class="has-submenu">
                <a href="#" class="button dropdown">Produse</a>
                <ul id="drop1" class="f-dropdown" aria-hidden="true">
                  <li><a href="procesoare.php" class="button">Procesoare</a></li>
                  <li><a href="placivideo.php" class="button">Plăci Video</a></li>
                  <li><a href="memorii_ram.php" class="button">Memorii RAM</a></li>
                  <li><a href="stocare.php" class="button">Stocare</a></li>
                  <li><a href="surse.php" class="button">Surse</a></li>
                  <li><a href="carcase.php" class="button">Carcase</a></li>
                  <li><a href="periferice.php" class="button">Periferice</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="top-bar-right">
        <ul class="menu">
            <?php if (isset($_SESSION['username'])): ?>
                <li><a href="logout.php" class="button">Logout</a></li>
            <?php else: ?>
                <li><a href="login.php" class="login-button">Logare</a></li>
                <li><a href="inregistrare.php" class="register-button">Înregistrare</a></li>
            <?php endif; ?>
            <li><a href="#">Cart</a></li>
        </ul>
    </div>
</nav>

<table>
  <tbody>
    <tr>
      <td>
        <div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
          <div class="orbit-wrapper">
            <div class="orbit-controls">
              <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
              <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
            </div>
            <ul class="orbit-container">
              <li class="is-active orbit-slide">
                <figure class="orbit-figure">
                  <img class="orbit-image" width="300" height="200" src="castilogitech.jpg" alt="Casti Gaming Logitech 1">
                </figure>
              </li>
              <li class="orbit-slide">
                <figure class="orbit-figure">
                  <img class="orbit-image" width="300" height="200" src="castilogitech2.jpg" alt="Casti Gaming Logitech 2">
                </figure>
              </li>
              <li class="orbit-slide">
                <figure class="orbit-figure">
                  <img class="orbit-image" width="300" height="200" src="castilogitech3.jpg" alt="Casti Gaming Logitech 3">
                </figure>
              </li>
              <li class="orbit-slide">
                <figure class="orbit-figure">
                  <img class="orbit-image" width="300" height="200" src="castilogitech4.jpg" alt="Casti Gaming Logitech 4">
                </figure>
              </li>
            </ul>
          </div>
          <nav class="orbit-bullets">
            <button class="is-active" data-slide="0"></button>
            <button data-slide="1"></button>
            <button data-slide="2"></button>
            <button data-slide="3"></button>
          </nav>
        </div>
      </td>
      <td><strong>Casti Gaming Wireless Logitech G733 LightSpeed RGB USB Black 981-000864</strong></td>
    </tr>
  </tbody>
</table>
<h2>599 Lei</h2>
<a href="#" class="button">Adaugă în coș</a>
<h4>DESCRIERE</h4>
<p>In sfarsit, niste casti care poate fi la fel de expresive ca tine. G733 este wireless si este conceput pentru confort. Si este echipat cu sunet surround, filtrele vocale si iluminatul avansat de care aveti nevoie pentru a arata, a asculta si a va juca cu mai mult stil ca niciodata
<br>
Tehnologia fara fir LIGHTSPEED va ofera 29+ ore de viata a bateriei si pana la 20 de metri de libertate wireless fiabila (Poate varia in functie de conditiile utilizatorului si de utilizare). Joaca fara a te incurca intr-un cablu. Relaxati-va si cufundati-va in joc, muzica, film sau orice altceva. Fii liber si joaca in felul tau.</p>
<!-- Tabel nou pentru specificații -->
<table>
  <thead>
    <tr>
      <th>Specificații</th>
      <th>Detalii</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Tehnologie:</td>
      <td>wireless</td>
    </tr>
    <tr>
      <td>Sunet:</td>
      <td>Stereo</td>
    </tr>
    <tr>
      <td>Microfon:</td>
      <td>Da</td>
    </tr>
    <tr>
      <td>Diametru:</td>
      <td>40 mm</td>
    </tr>
    <tr>
      <td>Frecventa de raspuns:</td>
      <td>20 Hz-20 kHz</td>
    </tr>
    <tr>
      <td>Recomandat pentru Gaming:</td>
      <td>Da</td>
    </tr>
    <tr>
      <td>Impedanta:</td>
      <td>39 (pasiv) / 5K (activ)</td>
    </tr>
    <tr>
      <td>Raport semnal/zgomot (dB):</td>
      <td>87.5 dB</td>
    </tr>
    <tr>
      <td>Greutate (g):</td>
      <td>278 g</td>
    </tr>
  </tbody>
</table>

<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/what-input.js"></script>
<script src="js/vendor/foundation.js"></script>
<script src="js/app.js"></script>
</body>
</html>
