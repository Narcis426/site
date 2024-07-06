<?php
session_start();
include 'db.php'; // Include fișierul pentru conectarea la baza de date

// Adaugă o nouă memorie RAM
if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $capacitate = $_POST['capacitate'];
    $kit_dual_channel = $_POST['kit_dual_channel'];
    $latenta_cas = $_POST['latenta_cas'];

    $sql = "INSERT INTO memorii_ram (name, capacitate, kit_dual_channel, latenta_cas) VALUES ('$name', '$capacitate', '$kit_dual_channel', '$latenta_cas')";
    if ($conn->query($sql) === TRUE) {
        header("Location: toatememoriiram.php");
        exit();
    } else {
        echo "Eroare: " . $sql . "<br>" . $conn->error;
    }
}

// Șterge o memorie RAM
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $sql = "DELETE FROM memorii_ram WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        header("Location: toatememoriiram.php");
        exit();
    } else {
        echo "Eroare: " . $conn->error;
    }
}

// Preia toate memoriile RAM din baza de date
$sql = "SELECT * FROM memorii_ram";
$result = $conn->query($sql);
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
    <style>
        .menu .has-submenu:hover .menu.vertical {
            display: block;
        }
        .menu .menu.vertical {
            display: none;
        }
    </style>
</head>
<body>

<nav class="top-bar">
    <div class="top-bar-left">
        <ul class="dropdown menu" data-dropdown-menu>
            <li><a href="home.php" class="button"><span class="material-symbols-outlined">home</span> Acasă</a></li>
            <li><a href="toateprodusele.php" class="button">Produse</a></li>
            <li><a href="useri.php" class="button">Utilizatori</a></li>
            <li><a href="producatori.php" class="button">Producători</a></li>
            <li class="has-submenu">
                <a href="#" class="button dropdown">Specificații</a>
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

<!-- Formular pentru adăugare memorie RAM -->
<div class="grid-container">
    <div class="grid-x grid-margin-x">
        <div class="cell large-12">
            <form action="toatememoriiram.php" method="post">
                <label for="name">Nume:</label>
                <input type="text" id="name" name="name" required>
                <label for="capacitate">Capacitate:</label>
                <input type="text" id="capacitate" name="capacitate" required>
                <label for="kit_dual_channel">Kit Dual Channel:</label>
                <input type="text" id="kit_dual_channel" name="kit_dual_channel" required>
                <label for="latenta_cas">Latenta CAS:</label>
                <input type="text" id="latenta_cas" name="latenta_cas" required>
                <button type="submit" name="add" class="button primary">Adaugă memorie RAM</button>
            </form>
        </div>
    </div>
</div>

<!-- Tabel pentru memorii RAM -->
<table>
  <thead>
    <tr>
      <th>Nume</th>
      <th>Capacitate</th>
      <th>Kit Dual Channel</th>
      <th>Latenta CAS</th>
      <th>Acțiuni</th>
    </tr>
  </thead>
  <tbody>
    <?php while ($row = $result->fetch_assoc()): ?>
    <tr>
      <td><?php echo htmlspecialchars($row['name']); ?></td>
      <td><?php echo htmlspecialchars($row['capacitate']); ?></td>
      <td><?php echo htmlspecialchars($row['kit_dual_channel']); ?></td>
      <td><?php echo htmlspecialchars($row['latenta_cas']); ?></td>
      <td>
        <a href="editare_memorie_ram.php?id=<?php echo $row['id']; ?>" class="button small">Editează</a>
        <a href="toatememoriiram.php?delete=<?php echo $row['id']; ?>" class="button alert small">Șterge</a>
      </td>
    </tr>
    <?php endwhile; ?>
  </tbody>
</table>

<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/what-input.js"></script>
<script src="js/vendor/foundation.js"></script>
<script src="js/app.js"></script>
</body>
</html>

<?php
$conn->close();
?>
