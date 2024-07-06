<?php
session_start();
?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Narcis PC - Kingston 32GB RAM</title>
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
                  <img class="orbit-image" width="300" height="200" src="ramkingston32gb.jpg" alt="Space">
                </figure>
              </li>
              <li class="orbit-slide">
                <figure class="orbit-figure">
                  <img class="orbit-image" width="300" height="200" src="ramkingston32gb2.jpg" alt="Space">
                </figure>
              </li>
              <li class="orbit-slide">
                <figure class="orbit-figure">
                  <img class="orbit-image" width="300" height="200" src="ramkingston32gb3.jpg" alt="Space">
                </figure>
              </li>
              <li class="orbit-slide">
                <figure class="orbit-figure">
                  <img class="orbit-image" width="300" height="200" src="ramkingston32gb4.jpg" alt="Space">
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
      <td><strong>Kit Memorie Kingston FURY Beast 32GB 2x16GB DDR4 3200MHz CL16 Dual Channel kf432c16bbk2/32</strong></td>
    </tr>
  </tbody>
</table>
<h2>379 Lei</h2>
<a href="#" class="button">Adaugă în coș</a>
<h4>DESCRIERE</h4>
<p>Kit Memorie Kingston FURY Beast 32GB ( 2x 16 GB ) DDR4 3200MHz CL16 Dual Channel
<br>
Kingston FURY™ Beast DDR4 oferă un puternic plus de performantă pentru jocuri, editare video si redare cu viteze până la 3733MHz si capacităti ale kittului de 8GB–128GB. Dispune de overclocking automat Plug N Play la viteze de 2666 MHz 1 si este pregătit atât pentru Intel XMP, cât si pentru AMD Ryzen. FURY Beast DDR4 lucrează la temperatură scăzută datorată radiatorului său de căldură elegant, cu profil redus. Testat la viteză 100% si sustinută de garantie pe viată, este un upgrade usor, fără griji, pentru sistemul tău Intel sau AMD.
<br>
Unele chipset-uri/procesoare vechi de la Intel înainte de a 8-a generatie nu au fost actualizate pentru a accepta module de memorie DDR4 cu DRAM 16Gbit. Verifică cu producătorul sistemului sau al plăcii de bază pentru un BIOS actualizat pentru a suporta 16Gbit DRAM.</p>
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
      <td>Capacitate</td>
      <td>32 GB</td>
    </tr>
    <tr>
      <td>Frecventa</td>
      <td>3200 MHz</td>
    </tr>
    <!-- Adaugă restul rândurilor conform necesității -->
    <tr>
      <td>Kit Dual Channel</td>
      <td>2x 16 GB</td>
    </tr>
    <tr>
      <td>Latenta CAS</td>
      <td>16 CL</td>
    </tr>
    <tr>
      <td>Radiator</td>
      <td>FURY Beast</td>
    </tr>
    <tr>
      <td>Recomandat pentru Gaming:</td>
      <td>Da</td>
    </tr>
    <tr>
      <td>Standard:</td>
      <td>PC4-25600</td>
    </tr>
     <tr>
      <td>Tensiune alimentare</td>
      <td>1.35 V</td>
    </tr>
    <tr>
      <td>Tip</td>
      <td>DDR 4</td>
    </tr>
  </tbody>
</table>

<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/what-input.js"></script>
<script src="js/vendor/foundation.js"></script>
<script src="js/app.js"></script>
</body>
</html>
