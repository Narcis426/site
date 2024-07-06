<?php
session_start();
?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Narcis PC - RTX 3060</title>
  <link rel="stylesheet" href="css/foundation.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>
<body>

<nav class="top-bar">
    <div class="top-bar-left">
        <ul class="dropdown menu" data-dropdown-menu>
            <li><a href="index.php" class="button"><span class="material-symbols-outlined">home</span>Acasă</a></li>
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
                  <img class="orbit-image" width="300" height="200" src="rtx3060.jpg" alt="Space">
                </figure>
              </li>
              <li class="orbit-slide">
                <figure class="orbit-figure">
                  <img class="orbit-image" width="300" height="200" src="rtx30602.jpg" alt="Space">
                </figure>
              </li>
              <li class="orbit-slide">
                <figure class="orbit-figure">
                  <img class="orbit-image" width="300" height="200" src="rtx30603.jpg" alt="Space">
                </figure>
              </li>
              <li class="orbit-slide">
                <figure class="orbit-figure">
                  <img class="orbit-image" width="300" height="200" src="rtx30604.jpg" alt="Space">
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
      <td><strong>Placa video MSI GeForce RTX 3060 VENTUS 3X OC 12GB GDDR6 192-bit</strong></td>
    </tr>
  </tbody>
</table>
<h2>1649 Lei</h2>
<a href="#" class="button">Adaugă în coș</a>
<h4>DESCRIERE</h4>
<p>VENTUS aduce un design axat pe performanta, care mentine elementele esentiale pentru indeplinirea oricarei sarcini la indemana. Un aranjament triplu capabil, prevazut intr-un design industrial rigid, permite acestei placi grafice cu aspect clar sa se incadreze in orice constructie.
<br>
  GeForce RTX ™ 3060 va permite sa preluati cele mai noi jocuri folosind puterea Ampere - arhitectura RTX a doua generatie a NVIDIA. Obtineti performante incredibile cu Core Tracing Cores si Tensor Cores imbunatatite, noi multiprocesoare de streaming si memorie G6 de mare viteza.
<br>
  Premiatul TORX FAN 3.0 permite impingerea limitelor performantei termice.
<br>
 Un numar amplu de pad-uri termice sunt permit diferitelor componente ale placii pentru a transfera caldura direct catre radiator.
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
      <td>Procesor video:</td>
      <td>NVIDIA GeForce RTX 30</td>
    </tr>
    <tr>
      <td>Producator chipset:</td>
      <td>NVIDIA</td>
    </tr>
    <!-- Adaugă restul rândurilor conform necesității -->
    <tr>
      <td>Interfata:</td>
      <td>PCI Express x16 4.0</td>
    </tr>
    <tr>
      <td>Capacitate memorie (GB):</td>
      <td>12 GB</td>
    </tr>
    <tr>
      <td>Rezolutie maxima</td>
      <td>7680x4320 pixeli</td>
    </tr>
    <tr>
      <td>Recomandat pentru Gaming:</td>
      <td>Da</td>
    </tr>
    <tr>
      <td>Tip memorie</td>
      <td>GDDR6</td>
    </tr>
     <tr>
      <td>Serie procesor grafic:</td>
      <td>Ampere</td>
    </tr>
    <tr>
      <td>Latime de banda memorie (biti):</td>
      <td>192</td>
    </tr>
  </tbody>
</table>

<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/what-input.js"></script>
<script src="js/vendor/foundation.js"></script>
<script src="js/app.js"></script>
</body>
</html>
