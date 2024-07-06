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
                  <img class="orbit-image" width="300" height="200" src="ssdkingston.jpg" alt="SSD Kingston NV2 1TB">
                </figure>
              </li>
              <li class="orbit-slide">
                <figure class="orbit-figure">
                  <img class="orbit-image" width="300" height="200" src="ssdkingston2.jpg" alt="SSD Kingston NV2 1TB">
                </figure>
              </li>
              <li class="orbit-slide">
                <figure class="orbit-figure">
                  <img class="orbit-image" width="300" height="200" src="ssdkingston3.jpg" alt="SSD Kingston NV2 1TB">
                </figure>
              </li>
              <li class="orbit-slide">
                <figure class="orbit-figure">
                  <img class="orbit-image" width="300" height="200" src="ssdkingston4.jpg" alt="SSD Kingston NV2 1TB">
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
      <td><strong>SSD Kingston NV2 1TB PCI Express 4.0 x4 M.2 NVMe 2280 snv2s/1000g</strong></td>
    </tr>
  </tbody>
</table>
<h2>309 Lei</h2>
<a href="#" class="button">Adaugă în coș</a>
<h4>DESCRIERE</h4>
<p>SSD NV2 PCIe 4.0 NVMe de la Kingston este o solutie de stocare substantiala de ultima generatie, alimentata de un controler NVMe Gen 4x4. NV2 ofera viteze de citire/scriere de pana la 3.500/2.800 MB/s, cu cerinte energetice si caldura mai mici, pentru a ajuta la optimizarea performantei sistemului dvs. si pentru a oferi valoare fara sacrificii. Designul compact cu o singura fata M.2 2280 (22x80mm) extinde spatiul de stocare cu pana la 2TB2, economisind in acelasi timp spatiu pentru alte componente, ceea ce face ca NV2 sa fie ideal pentru notebook-uri mai subtiri, sisteme cu factor de forma mic (SFF) si placi de baza DIY.</p>
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
      <td>1 TB</td>
    </tr>
    <tr>
      <td>Interfață</td>
      <td>PCI Express 4.0 x4</td>
    </tr>
    <tr>
      <td>Factor de formă</td>
      <td>M.2</td>
    </tr>
    <tr>
      <td>Greutate (g)</td>
      <td>10g</td>
    </tr>
    <tr>
      <td>Fiabilitate (MTBF)</td>
      <td>1.500.000 ore</td>
    </tr>
    <tr>
      <td>Recomandat pentru Gaming</td>
      <td>Da</td>
    </tr>
    <tr>
      <td>Temperatura operare</td>
      <td>0 - 70 grade C</td>
    </tr>
    <tr>
      <td>Tip SSD</td>
      <td>Intern</td>
    </tr>
    <tr>
      <td>Rezistență la șoc</td>
      <td>1500G</td>
    </tr>
  </tbody>
</table>

<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/what-input.js"></script>
<script src="js/vendor/foundation.js"></script>
<script src="js/app.js"></script>
</body>
</html>
