<?php
session_start();
include 'db.php'; // Include fișierul pentru conectarea la baza de date

// Preia detaliile carcasei pentru editare
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM carcase WHERE id=$id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Carcasa nu a fost găsită!";
        exit();
    }
}

// Actualizează detaliile carcasei
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $pozitionare_sursa = $_POST['pozitionare_sursa'];
    $lungime_video_gpu = $_POST['lungime_video_gpu'];
    $panou_lateral_transparent = $_POST['panou_lateral_transparent'];

    $sql = "UPDATE carcase SET name='$name', pozitionare_sursa='$pozitionare_sursa', lungime_video_gpu='$lungime_video_gpu', panou_lateral_transparent='$panou_lateral_transparent' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        header("Location: toatecarcasele.php");
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
    <title>Editează Carcasă - Narcis PC</title>
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

<!-- Formular pentru editare carcasă -->
<div class="grid-container">
    <div class="grid-x grid-margin-x">
        <div class="cell large-12">
            <form action="editare_carcase.php" method="post">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <label for="name">Nume carcasă:</label>
                <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($row['name']); ?>" required>
                <label for="pozitionare_sursa">Pozitionare sursă:</label>
                <input type="text" id="pozitionare_sursa" name="pozitionare_sursa" value="<?php echo htmlspecialchars($row['pozitionare_sursa']); ?>" required>
                <label for="lungime_video_gpu">Lungime video GPU:</label>
                <input type="text" id="lungime_video_gpu" name="lungime_video_gpu" value="<?php echo htmlspecialchars($row['lungime_video_gpu']); ?>" required>
                <label for="panou_lateral_transparent">Panou lateral transparent:</label>
                <input type="text" id="panou_lateral_transparent" name="panou_lateral_transparent" value="<?php echo htmlspecialchars($row['panou_lateral_transparent']); ?>" required>
                <button type="submit" name="update" class="button primary">Actualizează carcasă</button>
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
