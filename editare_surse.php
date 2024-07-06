<?php
session_start();
include 'db.php'; // Include fișierul pentru conectarea la baza de date

// Preia detaliile sursei pentru editare
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM surse WHERE id=$id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Sursa nu a fost găsită!";
        exit();
    }
}

// Actualizează detaliile sursei
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $putere_sursa = $_POST['putere_sursa'];
    $sistem_de_racire = $_POST['sistem_de_racire'];
    $certificare = $_POST['certificare'];

    $sql = "UPDATE surse SET name='$name', putere_sursa='$putere_sursa', sistem_de_racire='$sistem_de_racire', certificare='$certificare' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        header("Location: toatesursele.php");
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
    <title>Editează Sursă - Narcis PC</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>
<body>

<nav class="top-bar">
    <div class="top-bar-left">
        <ul class="menu">
            <li><a href="home.php" class="button"><span class="material-symbols-outlined">home</span>Acasă</a></li>
            <li><a href="toateprodusele.php" class="button">Produse</a></li>
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

<!-- Formular pentru editare sursă -->
<div class="grid-container">
    <div class="grid-x grid-margin-x">
        <div class="cell large-12">
            <form action="editare_surse.php" method="post">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <label for="name">Nume sursă:</label>
                <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($row['name']); ?>" required>
                <label for="putere_sursa">Putere sursă:</label>
                <input type="text" id="putere_sursa" name="putere_sursa" value="<?php echo htmlspecialchars($row['putere_sursa']); ?>" required>
                <label for="sistem_de_racire">Sistem de răcire:</label>
                <input type="text" id="sistem_de_racire" name="sistem_de_racire" value="<?php echo htmlspecialchars($row['sistem_de_racire']); ?>" required>
                <label for="certificare">Certificare:</label>
                <input type="text" id="certificare" name="certificare" value="<?php echo htmlspecialchars($row['certificare']); ?>" required>
                <button type="submit" name="update" class="button primary">Actualizează sursă</button>
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
