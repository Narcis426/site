<?php
include 'db.php';
$producator = null;
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM producatori WHERE id=$id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $producator = $result->fetch_assoc();
    } else {
        echo "Producătorul nu a fost găsit.";
        exit();
    }
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $sql = "UPDATE producatori SET name='$name' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        header("Location: producatori.php");
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
  <title>Editare Producător - Narcis PC</title>
  <link rel="stylesheet" href="css/foundation.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="grid-container">
    <div class="grid-x grid-margin-x">
        <div class="cell large-12">
            <?php if ($producator): ?>
            <form action="editare_producatori.php" method="post">
                <input type="hidden" name="id" value="<?php echo $producator['id']; ?>">
                <label for="name">Nume Producător:</label>
                <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($producator['name']); ?>" required>
                <button type="submit" name="update" class="button primary">Actualizează</button>
            </form>
            <?php else: ?>
            <p>Producătorul nu a fost găsit.</p>
            <?php endif; ?>
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
