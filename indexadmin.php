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
            <li><a href="toateprodusele.php" class="button">Produse</a></li>
            <li><a href="useri.php" class="button">Utilizatori</a></li>
            <li><a href="producatori.php" class="button">Producători</a></li>
            <li class="has-submenu">
                <a href="#" class="button dropdown">Specificații produse</a>
                <ul class="menu vertical">
                    <li><a href="toateprocesoarele.php" class="button">Procesoare</a></li>
                    <li><a href="toateplacivideo.php" class="button">Plăci Video</a></li>
                    <li><a href="toatememoriiram.php" class="button">Memorii RAM</a></li>
                    <li><a href="toatestocarea.php" class="button">Stocare</a></li>
                    <li><a href="toatesursele.php" class="button">Surse</a></li>
                    <li><a href="toatecarcasele.php" class="button">Carcase</a></li>
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
                <li><a href="inregistrare.php" class="register-button">Înregistrare</a></li>
            <?php endif; ?>
            <li><a href="#">Cart</a></li>
        </ul>
    </div>
</nav>

<div class="grid-container">
    <div class="grid-x grid-margin-x">
        <div class="cell large-9">
            <div class="grid-x grid-margin-x products">
                <!-- Conținutul tău pentru produse -->
            </div>
        </div>
    </div>
</div>

<div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
  <div class="orbit-wrapper">
    <div class="orbit-controls">
      <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
      <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
    </div>
    <ul class="orbit-container">
      <li class="is-active orbit-slide">
        <figure class="orbit-figure">
          <img class="orbit-image" width="300" height="200" src="slide1.jpg" alt="Space">
        </figure>
      </li>
      <li class="orbit-slide">
        <figure class="orbit-figure">
          <img class="orbit-image" width="300" height="200" src="slide2.jpg" alt="Space">
        </figure>
      </li>
      <li class="orbit-slide">
        <figure class="orbit-figure">
          <img class="orbit-image" width="300" height="200" src="slide3.jpg" alt="Space">
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

<h2>Produse recomandate</h2>
<table>
  <thead>
    <tr>
      <th></th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><div class="medium-6 columns panel" data-equalizer-watch>
        <img src="ssd.jpg" alt="SSD Samsung">
        <p>SSD Samsung 980 PRO 2TB PCIe Gen 4.0 x4 NVMe M.2 MZ-V8P2T0BW</p>
        <a href="ssd.php" class="button"> Vezi ofertă </a>
      </div></td>
      <td><div class="medium-6 columns panel" data-equalizer-watch>
        <img src="rtx3060.jpg" alt="rtx 3060">
        <p>Placa video MSI GeForce RTX 3060 VENTUS 3X OC 12GB GDDR6 192-bit</p>
        <a href="rtx3060.php" class="button"> Vezi ofertă</a>
      </div></td>
    </tr>
    <tr>
      <td><div class="medium-6 columns panel" data-equalizer-watch>
        <img src="i9.jpg" alt="procesor">
        <p>Procesor Intel Core i9-14900KF 3,2 GHz Raptor Lake Refresh Socket 1700 Box BX8071514900KF</p>
        <a href="i9.php" class="button"> Vezi ofertă</a>
      </div></td>
      <td><div class="medium-6 columns panel" data-equalizer-watch>
        <img src="carcasamsi.jpg" alt="carcasa msi">
        <p>Carcasa MSI MAG FORGE M100A aRGB cu sursa inclusa MSI MAG 600DN 600W 80 PLUS Active PFC</p>
        <a href="carcasamsi.php" class="button"> Vezi ofertă</a>
      </div></td>
    </tr>
    <tr>
      <td><div class="medium-6 columns panel" data-equalizer-watch>
        <img src="ramkingston32gb.jpg" alt="RAM">
        <p>Kit Memorie Kingston FURY Beast 32GB 2x16GB DDR4 3200MHz CL16 Dual Channel kf432c16bbk2/32</p>
        <a href="ramkingston32gb.php" class="button"> Vezi ofertă</a>
      </div></td>
      <td><div class="medium-6 columns panel" data-equalizer-watch>
        <img src="ssdsamsung.jpg" alt="ssdsamsung">
        <p>SSD Samsung 870 QVO 2TB SATA-III 2.5 inch MZ-77Q2T0BW</p>
        <a href="ssdsamsung.php" class="button"> Vezi ofertă</a>
      </div></td>
    </tr>
    <tr>
      <td><div class="medium-6 columns panel" data-equalizer-watch>
        <img src="sursagigabyte.jpg" alt="sursa">
        <p>Sursa Modulara GIGABYTE P850GM 850W 80+ Gold gp-p850gm</p>
        <a href="sursagigabyte.php" class="button"> Vezi ofertă</a>
      </div></td>
      <td><div class="medium-6 columns panel" data-equalizer-watch>
        <img src="mouselogitech.jpg" alt="mouse logitech">
        <p>Mouse Gaming Logitech G502 HERO High Performance 16000 DPI USB - EER2 910-005470</p>
        <a href="mouselogitech.php" class="button"> Vezi ofertă</a>
      </div></td>
    </tr>
    <tr>
      <td><div class="medium-6 columns panel" data-equalizer-watch>
        <img src="tastaturacorsair.jpg" alt="tastatura corsair">
        <p>Tastatura Gaming Corsair K55 RGB PRO XT Negru CH-9226715-NA</p>
        <a href="tastaturacorsair.php" class="button"> Vezi ofertă</a>
      </div></td>
      <td><div class="medium-6 columns panel" data-equalizer-watch>
        <img src="mousepadaqirys.jpg" alt="mousepad aqirys">
        <p>Mousepad AQIRYS Eclipse Medium (MD) aqrys_eclipsemd</p>
        <a href="mousepadaqirys.php" class="button"> Vezi ofertă</a>
      </div></td>
    </tr>
    <tr>
      <td><div class="medium-6 columns panel" data-equalizer-watch>
        <img src="castilogitech.jpg" alt="casti logitech">
        <p>Casti Gaming Wireless Logitech G733 LightSpeed RGB USB Black 981-000864</p>
        <a href="castilogitech.php" class="button"> Vezi ofertă</a>
      </div></td>
      <td><div class="medium-6 columns panel" data-equalizer-watch>
        <img src="monitormsi.jpg" alt="monitor msi">
        <p>Monitor Gaming MSI G274F 27'' Full HD IPS 1ms 180Hz HDR, FreeSync G-SYNC compatible, DisplayPort, HDMI</p>
        <a href="monitormsi.php" class="button"> Vezi ofertă</a>
      </div></td>
    </tr>
    <tr>
      <td><div class="medium-6 columns panel" data-equalizer-watch>
        <img src="boxe.jpg" alt="boxe serioux">
        <p>Boxe Serioux SoundBoost HT5100C 5.1 140W</p>
        <a href="boxe.php" class="button"> Vezi ofertă</a>
      </div></td>
      <td><div class="medium-6 columns panel" data-equalizer-watch>
        <img src="cameraweb.jpg" alt="camera web logitech">
        <p>Camera web Logitech C922 Full HD Pro Stream HD 960-001088</p>
        <a href="cameraweb.php" class="button"> Vezi ofertă</a>
      </div></td>
    </tr>
  </tbody>
</table>

<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/what-input.js"></script>
<script src="js/vendor/foundation.js"></script>
<script src="js/app.js"></script>
</body>
</html>
