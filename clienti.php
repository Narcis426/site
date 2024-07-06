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
            <li><a href="home.php" class="button"><span class="material-symbols-outlined">home</span> Acasă</a></li>

            <li><a href="toateprodusele.php" class="button">Produse</a></li>
            <li><a href="#" class="button">Coșul meu</a></li>
            <li><a href="useri.php" class="button">Utilizatori</a></li>
            <li><a href="producatori.php" class="button">Producători</a></li>
            <li><a href="clienti.php" class="button">Clienți</a></li>
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

<!-- Tabel pentru utilizatori -->
<table>
  <thead>
    <tr>
      <th>Utilizatori</th>
      <th>Acțiuni</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Alex123</td>
      <td>
        <a href="editare_clienti.php?client=alex123" class="button small">Editează</a>
        <a href="sterge_client.php?client=alex123v2" class="button alert small">Șterge</a>
      </td>
    </tr>
    <tr>
      <td>Lukasxd1</td>
      <td>
        <a href="editare_clienti.php?client=lukasxd1" class="button small">Editează</a>
        <a href="sterge_client.php?client=lukasxd1v2" class="button alert small">Șterge</a>
      </td>
    </tr>
    <tr>
      <td>AdrianP1984</td>
      <td>
        <a href="editare_clienti.php?client=adrianp1984" class="button small">Editează</a>
        <a href="sterge_client.php?client=adrianv2" class="button alert small">Șterge</a>
      </td>
    </tr>
    <tr>
      <td>boOsT</td>
      <td>
        <a href="editare_clienti.php?client=boost" class="button small">Editează</a>
        <a href="sterge_client.php?client=boostv2" class="button alert small">Șterge</a>
      </td>
    </tr>
    <tr>
      <td>ShadyGuy69</td>
      <td>
        <a href="editare_clienti.php?client=shadyguy69" class="button small">Editează</a>
        <a href="sterge_client.php?client=shadyguy69v2" class="button alert small">Șterge</a>
      </td>
    </tr>
  </tbody>
</table>

<div class="grid-container">
  <div class="grid-x grid-margin-x">
    <div class="cell large-12">
    </div>
    <div class="cell large-12">
      <a href="adauga_client.php" class="button large success">Adaugă client</a>
    </div>
  </div>
</div>

<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/what-input.js"></script>
<script src="js/vendor/foundation.js"></script>
<script src="js/app.js"></script>
</body>
</html>
