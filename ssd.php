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
                <button href="#" data-dropdown="drop1" aria-controls="drop1" aria-expanded="false" class="button dropdown">Produse</button><br>
<ul id="drop1" data-dropdown-content class="f-dropdown" aria-hidden="true">
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
            <?php if (isset($_SESSION['user_id'])): ?>
                <li><a href="logout.php" class="button">Logout</a></li>
            <?php else: ?>
                <li><a href="login.php" class="login-button">Logare</a></li>
                <li><a href="register.php" class="register-button">Înregistrare</a></li>
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
                  <img class="orbit-image" width="300" height="200" src="ssd.jpg" alt="Space">
                </figure>
              </li>
              <li class="orbit-slide">
                <figure class="orbit-figure">
                  <img class="orbit-image" width="300" height="200" src="ssd2.jpg" alt="Space">
                </figure>
              </li>
              <li class="orbit-slide">
                <figure class="orbit-figure">
                  <img class="orbit-image" width="300" height="200" src="ssd3.jpg" alt="Space">
                </figure>
              </li>
              <li class="orbit-slide">
                <figure class="orbit-figure">
                  <img class="orbit-image" width="300" height="200" src="ssd4.jpg" alt="Space">
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
      <td><strong>SSD Samsung 980 PRO 1TB PCI Express 4.0 x4 M.2 2280 mz-v8p1t0bw</strong></td>
    </tr>
  </tbody>
</table>
<h2>839 Lei</h2>
<a href="#" class="button">Adaugă în coș</a>
<h4>DESCRIERE</h4>
<p>SSD Samsung MZ-V8P2T0BW 980 PRO 2TB NVMe M.2
<br>
  Folosind interfata PCIe 4.0, 980 PRO oferă o viteză de transfer de date dublă fată de PCIe 3.0, fiind în acelasi timp compatibilă cu PCIe 3.0 pentru o versatilitate sporită.
<br>
  Oferă viteze de citire de până la 7.000 MB / s, făcându-l de 2 ori mai rapid decât SSD-urile PCIe 3.0 si de 12,7 ori mai rapid decât SSD-urile SATA.
<br>
  Proiectat având în vedere jucătorii hardcore si utilizatorii cu experientă în tehnologie, modelul 980 PRO oferă lătime de bandă si performantă pentru aplicatii grele, jocuri, grafică, analize de date si multe altele. Jocurile se incarca rapid, astfel încât să puteti juca mai mult si să asteptati mai putin.
</p>
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
      <td>Capacitate (GB)</td>
      <td>2 TB</td>
    </tr>
    <tr>
      <td>Interfata:</td>
      <td>PCI Express 4.0 x4</td>
    </tr>
    <!-- Adaugă restul rândurilor conform necesității -->
    <tr>
      <td>Dimensiuni</td>
      <td>80.15 x 2.38 x 22.15 mm</td>
    </tr>
    <tr>
      <td>Viteza de transfer:</td>
      <td>5100</td>
    </tr>
    <tr>
      <td>Factor de forma:</td>
      <td>M.2</td>
    </tr>
    <tr>
      <td>Recomandat pentru Gaming:</td>
      <td>Da</td>
    </tr>
    <tr>
      <td>Temperatura operare:</td>
      <td>0 - 70 grade C</td>
    </tr>
     <tr>
      <td>Citire max.</td>
      <td>7000 MB/s</td>
    </tr>
    <tr>
      <td>Tip SSD</td>
      <td>Intern</td>
    </tr>
  </tbody>
</table>

<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/what-input.js"></script>
<script src="js/vendor/foundation.js"></script>
<script src="js/app.js"></script>
</body>
</html>
