<?php
session_start();
include 'db.php'; // Include fișierul pentru conectarea la baza de date

// Adaugă o nouă placă video
if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $procesor_video = $_POST['procesor_video'];
    $producator_chipset = $_POST['producator_chipset'];
    $capacitate_memorie = $_POST['capacitate_memorie'];

    $sql = "INSERT INTO placi_video (name, procesor_video, producator_chipset, capacitate_memorie) VALUES ('$name', '$procesor_video', '$producator_chipset', '$capacitate_memorie')";
    if ($conn->query($sql) === TRUE) {
        header("Location: toateplacivideo.php");
        exit();
    } else {
        echo "Eroare: " . $sql . "<br>" . $conn->error;
    }
}

// Șterge o placă video
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $sql = "DELETE FROM placi_video WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        header("Location: toateplacivideo.php");
        exit();
    } else {
        echo "Eroare: " . $conn->error;
    }
}

// Preia toate plăcile video din baza de date
$sql = "SELECT * FROM placi_video";
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

<!-- Formular pentru adăugare placă video -->
<div class="grid-container">
    <div class="grid-x grid-margin-x">
        <div class="cell large-12">
            <form action="toateplacivideo.php" method="post">
                <label for="name">Nume placă video:</label>
                <input type="text" id="name" name="name" required>
                <label for="procesor_video">Procesor video:</label>
                <input type="text" id="procesor_video" name="procesor_video" required>
                <label for="producator_chipset">Producător chipset:</label>
                <input type="text" id="producator_chipset" name="producator_chipset" required>
                <label for="capacitate_memorie">Capacitate memorie:</label>
                <input type="text" id="capacitate_memorie" name="capacitate_memorie" required>
                <button type="submit" name="add" class="button primary">Adaugă placă video</button>
            </form>
        </div>
    </div>
</div>

<!-- Tabel pentru plăci video -->
<table>
  <thead>
    <tr>
      <th>Nume</th>
      <th>Procesor video</th>
      <th>Producător chipset</th>
      <th>Capacitate memorie</th>
      <th>Acțiuni</th>
    </tr>
  </thead>
  <tbody>
    <?php while ($row = $result->fetch_assoc()): ?>
    <tr>
      <td><?php echo htmlspecialchars($row['name']); ?></td>
      <td><?php echo htmlspecialchars($row['procesor_video']); ?></td>
      <td><?php echo htmlspecialchars($row['producator_chipset']); ?></td>
      <td><?php echo htmlspecialchars($row['capacitate_memorie']); ?></td>
      <td>
        <a href="editare_placa_video.php?id=<?php echo $row['id']; ?>" class="button small">Editează</a>
        <a href="toateplacivideo.php?delete=<?php echo $row['id']; ?>" class="button alert small">Șterge</a>
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
