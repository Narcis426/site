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
                  <img class="orbit-image" width="300" height="200" src="i9.jpg" alt="Space">
                </figure>
              </li>
              <li class="orbit-slide">
                <figure class="orbit-figure">
                  <img class="orbit-image" width="300" height="200" src="i92.jpg" alt="Space">
                </figure>
              </li>
              <li class="orbit-slide">
                <figure class="orbit-figure">
                  <img class="orbit-image" width="300" height="200" src="i93.jpg" alt="Space">
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
      <td><strong>Procesor Intel Core i9-14900KF 3,2 GHz Raptor Lake Refresh Socket 1700 Box BX8071514900KF</strong></td>
    </tr>
  </tbody>
</table>
<h2>2949 Lei</h2>
<a href="#" class="button">Adaugă în coș</a>
<h4>DESCRIERE</h4>
<p>Procesor Intel® Core™ i9-14900KF, pana la 6.0 GHz turbo, 36MB, Socket LGA1700, fara video integrat.
<br>
The Ultimate Gaming Platform: Procesoarele Intel Core de a 14-a generatie ofera o experienta de joc captivanta, cu o crestere de pana la 23% a performantelor de joc in comparatie cu procesoarele concurente de top, in timp ce noile caracteristici axate pe jocuri, cum ar fi Intel® Application Optimization (APO), asigura o programare mai buna decat oricand a firelor de aplicatii, alaturi de programarea firelor de aplicatii existente Intel® Thread Director.
<br>
  Leadership continuu in domeniul overclocking-ului: Procesoarele deblocate Intel Core de a 14-a generatie continua sa ofere o experienta de overclocking de neegalat pentru toata lumea - de la experti la incepatori. Procesoarele desktop deblocate de ultima generatie includ acum noua functie Intel® XTU AI Assist pentru overclocking ghidat de AI, precum si suport pentru viteze DDR5 XMP mult peste 8.000 de megatransferuri/secunda (MT/S).</p>
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
      <td>Frecventa</td>
      <td>DDR4 3200 MHzDDR5 5600 MHz</td>
    </tr>
    <tr>
      <td>Memorie maxima</td>
      <td>192 GB</td>
    </tr>
    <!-- Adaugă restul rândurilor conform necesității -->
    <tr>
      <td>Suport:</td>
      <td>Dual Channel</td>
    </tr>
    <tr>
      <td>Tip</td>
      <td>DDR4DDR5</td>
    </tr>
    <tr>
      <td>CPU Socket:</td>
      <td>1700</td>
    </tr>
    <tr>
      <td>Recomandat pentru Gaming:</td>
      <td>Da</td>
    </tr>
    <tr>
      <td>Frecventa turbo pana la</td>
      <td>6 GHz</td>
    </tr>
     <tr>
      <td>Nucleu</td>
      <td>Raptor Lake Refresh</td>
    </tr>
    <tr>
      <td>Putere totala disipata:</td>
      <td>125W Maximum Turbo Power 253 W</td>
    </tr>
  </tbody>
</table>

<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/what-input.js"></script>
<script src="js/vendor/foundation.js"></script>
<script src="js/app.js"></script>
</body>
</html>
