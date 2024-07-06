<?php
session_start();
include 'db.php'; // Include fișierul pentru conectarea la baza de date

// Preia datele memoriei RAM
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM memorii_ram WHERE id=$id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Memoria RAM nu a fost găsită.";
        exit();
    }
} else {
    echo "ID-ul memoriei RAM nu a fost specificat.";
    exit();
}

// Actualizează memoria RAM
if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $capacitate = $_POST['capacitate'];
    $kit_dual_channel = $_POST['kit_dual_channel'];
    $latenta_cas = $_POST['latenta_cas'];

    $sql = "UPDATE memorii_ram SET name='$name', capacitate='$capacitate', kit_dual_channel='$kit_dual_channel', latenta_cas='$latenta_cas' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        header("Location: toatememoriiram.php");
        exit();
    } else {
        echo "Eroare: " . $sql . "<br>" . $conn->error;
    }
}
?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editare Memorie RAM - Narcis PC</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>
<body>

<nav class="top-bar">
    <div class="top-bar-left">
        <ul class="dropdown menu" data-dropdown-menu>
            <li><a href="home.php" class="button"><span class="material-symbols-outlined">home</span>Acasă</a></li>
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

<!-- Formular pentru editarea memoriei RAM -->
<div class="grid-container">
    <div class="grid-x grid-margin-x">
        <div class="cell large-12">
            <form action="editare_memorie_ram.php?id=<?php echo $id; ?>" method="post">
                <label for="name">Nume:</label>
                <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($row['name']); ?>" required>
                <label for="capacitate">Capacitate:</label>
                <input type="text" id="capacitate" name="capacitate" value="<?php echo htmlspecialchars($row['capacitate']); ?>" required>
                <label for="kit_dual_channel">Kit Dual Channel:</label>
                <input type="text" id="kit_dual_channel" name="kit_dual_channel" value="<?php echo htmlspecialchars($row['kit_dual_channel']); ?>" required>
                <label for="latenta_cas">Latenta CAS:</label>
                <input type="text" id="latenta_cas" name="latenta_cas" value="<?php echo htmlspecialchars($row['latenta_cas']); ?>" required>
                <button type="submit" name="update" class="button primary">Actualizează memoria RAM</button>
            </form>
        </div>
    </div>
</div>

<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/what-input.js"></script>
<script src="js/vendor/foundation.js"></script>
<script src="js/app.js"></script>
</body>
</html>

<?php
$conn->close();
?>
