<?php
session_start();
include 'db.php'; // Include fișierul pentru conectarea la baza de date

// Adaugă o nouă sursă
if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $putere_sursa = $_POST['putere_sursa'];
    $sistem_de_racire = $_POST['sistem_de_racire'];
    $certificare = $_POST['certificare'];

    $sql = "INSERT INTO surse (name, putere_sursa, sistem_de_racire, certificare) VALUES ('$name', '$putere_sursa', '$sistem_de_racire', '$certificare')";
    if ($conn->query($sql) === TRUE) {
        header("Location: toatesursele.php");
        exit();
    } else {
        echo "Eroare: " . $sql . "<br>" . $conn->error;
    }
}

// Șterge o sursă
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $sql = "DELETE FROM surse WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        header("Location: toatesursele.php");
        exit();
    } else {
        echo "Eroare: " . $conn->error;
    }
}

// Preia toate sursele din baza de date
$sql = "SELECT * FROM surse";
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
            <li><a href="home.php" class="button"><span class="material-symbols-outlined">home</span>Acasă</a></li>
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

<!-- Formular pentru adăugare sursă -->
<div class="grid-container">
    <div class="grid-x grid-margin-x">
        <div class="cell large-12">
            <form action="toatesursele.php" method="post">
                <label for="name">Nume sursă:</label>
                <input type="text" id="name" name="name" required>
                <label for="putere_sursa">Putere sursă:</label>
                <input type="text" id="putere_sursa" name="putere_sursa" required>
                <label for="sistem_de_racire">Sistem de răcire:</label>
                <input type="text" id="sistem_de_racire" name="sistem_de_racire" required>
                <label for="certificare">Certificare:</label>
                <input type="text" id="certificare" name="certificare" required>
                <button type="submit" name="add" class="button primary">Adaugă sursă</button>
            </form>
        </div>
    </div>
</div>

<!-- Tabel pentru surse -->
<table>
  <thead>
    <tr>
      <th>Nume</th>
      <th>Putere sursă</th>
      <th>Sistem de răcire</th>
      <th>Certificare</th>
      <th>Acțiuni</th>
    </tr>
  </thead>
  <tbody>
    <?php while ($row = $result->fetch_assoc()): ?>
    <tr>
      <td><?php echo htmlspecialchars($row['name']); ?></td>
      <td><?php echo htmlspecialchars($row['putere_sursa']); ?></td>
      <td><?php echo htmlspecialchars($row['sistem_de_racire']); ?></td>
      <td><?php echo htmlspecialchars($row['certificare']); ?></td>
      <td>
        <a href="editare_surse.php?id=<?php echo $row['id']; ?>" class="button small">Editează</a>
        <a href="toatesursele.php?delete=<?php echo $row['id']; ?>" class="button alert small">Șterge</a>
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
