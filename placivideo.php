<?php
session_start();
?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Narcis PC - Plăci Video</title>
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
<!-- Main Content -->
<div class="grid-container">
    <div class="grid-x grid-margin-x">
        <!-- Product Listing -->
        <div class="cell large-9">
            <h2>Plăci video</h2>
            <div class="grid-x grid-margin-x products">
                <!-- Products will be dynamically added here -->
            </div>
        </div>
    </div>
</div>

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
                <img src="rx6700xt.jpg" alt="rx">
                <p>Placa video Sapphire Radeon RX 6700 XT PULSE 12GB GDDR6 192-bit 11306-02-20G</p>
                <a href="rx6700xt.php" class="button"> Vezi ofertă </a>
            </div></td>
            <td><div class="medium-6 columns panel" data-equalizer-watch>
                <img src="rtx3060.jpg" alt="rtx 3060">
                <p>Placa video MSI GeForce RTX 3060 VENTUS 3X OC 12GB GDDR6 192-bit</p>
                <a href="rtx3060.php" class="button"> Vezi ofertă</a>
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
