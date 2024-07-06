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
                  <img class="orbit-image" width="300" height="200" src="monitormsi.jpg" alt="Monitor MSI">
                </figure>
              </li>
              <li class="orbit-slide">
                <figure class="orbit-figure">
                  <img class="orbit-image" width="300" height="200" src="monitormsi2.jpg" alt="Monitor MSI">
                </figure>
              </li>
              <li class="orbit-slide">
                <figure class="orbit-figure">
                  <img class="orbit-image" width="300" height="200" src="monitormsi3.jpg" alt="Monitor MSI">
                </figure>
              </li>
              <li class="orbit-slide">
                <figure class="orbit-figure">
                  <img class="orbit-image" width="300" height="200" src="monitormsi4.jpg" alt="Monitor MSI">
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
      <td><strong>Monitor Gaming MSI G274F 27'' Full HD IPS 1ms 180Hz HDR, FreeSync G-SYNC compatible, DisplayPort, HDMI</strong></td>
    </tr>
  </tbody>
</table>
<h2>824 Lei</h2>
<a href="#" class="button">Adaugă în coș</a>
<h4>DESCRIERE</h4>
<p>Echipat cu o rată de reîmprospătare de 1920 x 1080, 180 Hz, timp de răspuns GtG de 1 ms, panou IPS rapid, G274F vă va oferi avantajul competitiv de care aveti nevoie pentru a vă învinge adversarii. Bucurati-vă de un joc extrem de fluid, fără rupere, cu tehnologia NVIDIA G-SYNC compatibilă (atunci când este asociat cu o placă grafică NVIDIA compatibilă).
<br>
Monitorul pentru jocuri MSI este echipat cu tehnologie HDR care poate produce imagini cu mai multe detalii, o gamă mai largă de culori si poate arăta mai asemănător cu ceea ce vede ochiul uman în comparatie cu monitorul traditional.</p>
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
      <td>Rezolutie optima:</td>
      <td>1920 x 1080</td>
    </tr>
    <tr>
      <td>Tehnologie display:</td>
      <td>LED</td>
    </tr>
    <tr>
      <td>Tip Panel:</td>
      <td>IPS</td>
    </tr>
    <tr>
      <td>Timp de raspuns:</td>
      <td>1 ms</td>
    </tr>
    <tr>
      <td>Diagonala:</td>
      <td>27 inch</td>
    </tr>
    <tr>
      <td>Recomandat pentru Gaming:</td>
      <td>Da</td>
    </tr>
    <tr>
      <td>Rata de refresh (Hz):</td>
      <td>180Hz</td>
    </tr>
     <tr>
      <td>Plug and play</td>
      <td>Da</td>
    </tr>
    <tr>
      <td>Rata de aspect</td>
      <td>16:9</td>
    </tr>
  </tbody>
</table>

<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/what-input.js"></script>
<script src="js/vendor/foundation.js"></script>
<script src="js/app.js"></script>
</body>
</html>
