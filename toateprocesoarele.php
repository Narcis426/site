<?php
session_start();
include 'db.php'; // Include fișierul pentru conectarea la baza de date

// Adaugă un nou procesor
if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $frecventa = $_POST['frecventa'];
    $memorie_maxima = $_POST['memorie_maxima'];
    $suport = $_POST['suport'];
    $tip = $_POST['tip'];

    $sql = "INSERT INTO procesoare (name, frecventa, memorie_maxima, suport, tip) VALUES ('$name', '$frecventa', '$memorie_maxima', '$suport', '$tip')";
    if ($conn->query($sql) === TRUE) {
        header("Location: toateprocesoarele.php");
        exit();
    } else {
        echo "Eroare: " . $sql . "<br>" . $conn->error;
    }
}

// Șterge un procesor
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $sql = "DELETE FROM procesoare WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        header("Location: toateprocesoarele.php");
        exit();
    } else {
        echo "Eroare: " . $conn->error;
    }
}

// Preia toate procesoarele din baza de date
$sql = "SELECT * FROM procesoare";
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

<!-- Formular pentru adăugare procesor -->
<div class="grid-container">
    <div class="grid-x grid-margin-x">
        <div class="cell large-12">
            <form action="toateprocesoarele.php" method="post">
                <label for="name">Nume procesor:</label>
                <input type="text" id="name" name="name" required>
                <label for="frecventa">Frecvență:</label>
                <input type="text" id="frecventa" name="frecventa" required>
                <label for="memorie_maxima">Memorie maximă:</label>
                <input type="text" id="memorie_maxima" name="memorie_maxima" required>
                <label for="suport">Suport:</label>
                <input type="text" id="suport" name="suport" required>
                <label for="tip">Tip:</label>
                <input type="text" id="tip" name="tip" required>
                <button type="submit" name="add" class="button primary">Adaugă procesor</button>
            </form>
        </div>
    </div>
</div>

<!-- Tabel pentru procesoare -->
<table>
  <thead>
    <tr>
      <th>Nume</th>
      <th>Frecvență</th>
      <th>Memorie maximă</th>
      <th>Suport</th>
      <th>Tip</th>
      <th>Acțiuni</th>
    </tr>
  </thead>
  <tbody>
    <?php while ($row = $result->fetch_assoc()): ?>
    <tr>
      <td><?php echo htmlspecialchars($row['name']); ?></td>
      <td><?php echo htmlspecialchars($row['frecventa']); ?></td>
      <td><?php echo htmlspecialchars($row['memorie_maxima']); ?></td>
      <td><?php echo htmlspecialchars($row['suport']); ?></td>
      <td><?php echo htmlspecialchars($row['tip']); ?></td>
      <td>
        <a href="editare_procesor.php?id=<?php echo $row['id']; ?>" class="button small">Editează</a>
        <a href="toateprocesoarele.php?delete=<?php echo $row['id']; ?>" class="button alert small">Șterge</a>
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
