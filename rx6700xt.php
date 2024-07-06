<?php
session_start();
?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Narcis PC - RX 6700 XT</title>
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
                  <img class="orbit-image" width="300" height="200" src="rx6700xt.jpg" alt="Space">
                </figure>
              </li>
              <li class="orbit-slide">
                <figure class="orbit-figure">
                  <img class="orbit-image" width="300" height="200" src="rx6700xt2.jpg" alt="Space">
                </figure>
              </li>
              <li class="orbit-slide">
                <figure class="orbit-figure">
                  <img class="orbit-image" width="300" height="200" src="rx6700xt3.jpg" alt="Space">
                </figure>
              </li>
              <li class="orbit-slide">
                <figure class="orbit-figure">
                  <img class="orbit-image" width="300" height="200" src="rx6700xt4.jpg" alt="Space">
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
      <td><strong>Placa video Sapphire Radeon RX 6700 XT PULSE 12GB GDDR6 192-bit 11306-02-20G</strong></td>
    </tr>
  </tbody>
</table>
<h2>1749 Lei</h2>
<a href="#" class="button">Adaugă în coș</a>
<h4>DESCRIERE</h4>
<p>Va prezentam placile video AMD Radeon ™ RX 6700 XT, cu arhitectura revolutionara AMD RDNA ™ 2. Conceput pentru a oferi cea mai buna experienta de joc 1440p, AMD Radeon ™ RX 6700 XT alimenteaza o noua generatie de jocuri cu imagini vii si experiente ridicate.
<br>
Placile grafice din seria AMD Radeon ™ RX 6700 ofera frame rates ultra-ridicate si un joc 2K serios. Obtineti experienta de gaming finala cu noi unitati de calcul puternice, revolutionare AMD Infinity Cache si pana la 16 GB de memorie GDDR6 dedicata. Si, atunci cand este asociat cu un procesor desktop AMD Ryzen ™ 5000 Series, tehnologia AMD Smart Access Memory ofera noi niveluri de performanta in jocuri.</p>
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
      <td>Radeon RX 6000</td>
    </tr>
    <tr>
      <td>Producator chipset:</td>
      <td>AMD</td>
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
