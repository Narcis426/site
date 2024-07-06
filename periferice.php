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
                <li><a href="inregistrare.php" class="register-button">Înregistrare</a></li>
            <?php endif; ?>
            <li><a href="#">Cart</a></li>
        </ul>
    </div>
</nav>
<!-- Main Content -->
<div class="grid-container">
    <div class="grid-x grid-margin-x">
        <!-- Product Listing -->
        <div class="cell large-9">
            <h2>Periferice</h2>
            <div class="grid-x grid-margin-x products">
                <!-- Products will be dynamically added here -->
            </div>
        </div>
  </div>
</div>
    </div>
</div>

<table>
  <thead>
    <tr>
      <th></th>
      <th></tH>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><div class="medium-6 columns panel" data-equalizer-watch>
    <img src="monitormsi.jpg" alt="Monitor MSI">
    <p>Monitor Gaming MSI G274F 27'' Full HD IPS 1ms 180Hz HDR, FreeSync G-SYNC compatible, DisplayPort, HDMI</p>
    <a href="monitormsi.php" class="button"> Vezi ofertă </a>
  </div></td>
      <td><div class="medium-6 columns panel" data-equalizer-watch>
    <img src="mouselogitech.jpg" alt="Mouse Logitech">
    <p>Mouse Gaming Logitech G502 HERO High Performance 16000 DPI USB - EER2 910-005470</p>
    <a href="mouselogitech.php" class="button"> Vezi ofertă</a>
  </div></td>
    </tr>
    <tr>
      <td><div class="medium-6 columns panel" data-equalizer-watch>
    <img src="tastaturacorsair.jpg" alt="Tastatura Corsair">
    <p>Tastatura Gaming Corsair K55 RGB PRO XT Negru CH-9226715-NA</p>
    <a href="tastaturacorsair.php" class="button"> Vezi ofertă</a>
  </div></td>
      <td><div class="medium-6 columns panel" data-equalizer-watch>
    <img src="mousepadaqirys.jpg" alt="Mousepad AQIRYS">
    <p>Mousepad AQIRYS Eclipse Medium (MD) aqrys_eclipsemd</p>
    <a href="mousepadaqirys.php" class="button"> Vezi ofertă</a>
  </div></td>
    </tr>
    <tr>
      <td><div class="medium-6 columns panel" data-equalizer-watch>
    <img src="castilogitech.jpg" alt="Casti Logitech">
    <p>Casti Gaming Wireless Logitech G733 LightSpeed RGB USB Black 981-000864</p>
    <a href="castilogitech.php" class="button"> Vezi ofertă</a>
  </div></td>
      <td><div class="medium-6 columns panel" data-equalizer-watch>
    <img src="cameraweb.jpg" alt="Camera web Logitech">
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
