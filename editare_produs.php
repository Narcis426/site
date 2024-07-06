<?php
include 'db.php'; // Include fișierul pentru conectarea la baza de date

// Preia detaliile produsului
$id = $_GET['id'];
$sql = "SELECT * FROM produse WHERE id=$id";
$result = $conn->query($sql);
$product = $result->fetch_assoc();

// Actualizează detaliile produsului
if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $pret = $_POST['pret'];
    $descriere = $_POST['descriere'];

    // Verifică dacă a fost selectată o nouă imagine
    if ($_FILES['image']['name']) {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
        $image_url = $target_file;
    } else {
        $image_url = $product['image_url'];
    }

    $sql = "UPDATE produse SET name='$name', image_url='$image_url', pret='$pret', descriere='$descriere' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        header("Location: toateprodusele.php");
        exit();
    } else {
        echo "Eroare: " . $conn->error;
    }
}
?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editează Produs - Narcis PC</title>
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

<!-- Formular pentru editare produs -->
<div class="grid-container">
    <div class="grid-x grid-margin-x">
        <div class="cell large-12">
            <form action="editare_produs.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
                <label for="name">Nume produs:</label>
                <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($product['name']); ?>" required>
                <label for="image">Imagine:</label>
                <input type="file" id="image" name="image">
                <label for="pret">Preț:</label>
                <input type="text" id="pret" name="pret" value="<?php echo htmlspecialchars($product['pret']); ?>" required>
                <label for="descriere">Descriere:</label>
                <textarea id="descriere" name="descriere" required><?php echo htmlspecialchars($product['descriere']); ?></textarea>
                <button type="submit" name="update" class="button primary">Actualizează produs</button>
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
