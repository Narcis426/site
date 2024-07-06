<?php
session_start();
include 'db.php'; // Include fișierul pentru conectarea la baza de date

// Preia datele procesorului
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM procesoare WHERE id=$id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Procesorul nu a fost găsit.";
        exit();
    }
} else {
    echo "ID-ul procesorului nu a fost specificat.";
    exit();
}

// Actualizează procesorul
if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $frecventa = $_POST['frecventa'];
    $memorie_maxima = $_POST['memorie_maxima'];
    $suport = $_POST['suport'];
    $tip = $_POST['tip'];

    $sql = "UPDATE procesoare SET name='$name', frecventa='$frecventa', memorie_maxima='$memorie_maxima', suport='$suport', tip='$tip' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        header("Location: toateprocesoarele.php");
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
    <title>Editare Procesor - Narcis PC</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>
<body>

<nav class="top-bar">
    <div class="top-bar-left">
        <ul class="menu" data-dropdown-menu>
            <li><a href="home.php" class="button"><span class="material-symbols-outlined">home</span>Acasă</a></li>
            <li><a href="toateprodusele.php" class="button">Produse</a></li>
            <li><a href="toateplacivideo.php" class="button">Plăci Video</a></li>
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

<!-- Formular pentru editarea procesorului -->
<div class="grid-container">
    <div class="grid-x grid-margin-x">
        <div class="cell large-12">
            <form action="editare_procesor.php?id=<?php echo $id; ?>" method="post">
                <label for="name">Nume procesor:</label>
                <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($row['name']); ?>" required>
                <label for="frecventa">Frecvență:</label>
                <input type="text" id="frecventa" name="frecventa" value="<?php echo htmlspecialchars($row['frecventa']); ?>" required>
                <label for="memorie_maxima">Memorie maximă:</label>
                <input type="text" id="memorie_maxima" name="memorie_maxima" value="<?php echo htmlspecialchars($row['memorie_maxima']); ?>" required>
                <label for="suport">Suport:</label>
                <input type="text" id="suport" name="suport" value="<?php echo htmlspecialchars($row['suport']); ?>" required>
                <label for="tip">Tip:</label>
                <input type="text" id="tip" name="tip" value="<?php echo htmlspecialchars($row['tip']); ?>" required>
                <button type="submit" name="update" class="button primary">Actualizează procesor</button>
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
