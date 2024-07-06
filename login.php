<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <title>Login - Narcis PC</title>
    <style>
        .grid-container {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        form {
            border: 1px solid #ccc;
            padding: 20px;
            box-shadow: 0 0 10px #ccc;
            border-radius: 5px;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        button {
            background-color: #007BFF;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }
        button:hover {
            opacity: 0.8;
        }
    </style>
</head>
<body>
    <nav class="top-bar">
    <div class="top-bar-left">
        <ul class="dropdown menu" data-dropdown-menu>
            <li><a href="home.php" class="button"><span class="material-symbols-outlined">home</span>Acasă</a></li>
            <li class="has-submenu">
                <button href="#" data-dropdown="drop1" aria-controls="drop1" aria-expanded="false" class="button dropdown">Produse</button><br>
                <ul id="drop1" data-dropdown-content class="f-dropdown" aria-hidden="true">
                    <li><a href="procesoare.php" class="button">Procesoare</a></li>
                    <li><a href="placivideo.php" class="button">Plăci Video</a></li>
                    <li><a href="memorii_ram.php" class="button">Memorii RAM</a></li>
                    <li><a href="stocare.php" class="button">Stocare</a></li>
                    <li><a href="surse.php" class="button">Surse</a></li>
                    <li><a href="carcase.php" class="button">Carcase</a></li>
                    <li><a href="periferice.php" class="button">Periferice</a></li>
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
                <li><a href="register.php" class="register-button">Înregistrare</a></li>
            <?php endif; ?>
            <li><a href="#">Cart</a></li>
        </ul>
    </div>
</nav>

<div class="grid-container">
    <div class="grid-x grid-margin-x">
        <form action="submit-login.php" method="post">
            <div class="container">
                <label for="uname"><b>Nume utilizator</b></label>
                <input type="text" placeholder="Introduceți numele de utilizator" name="uname" required>
    
                <label for="psw"><b>Parolă</b></label>
                <input type="password" placeholder="Introduceți parola" name="psw" required>
    
                <button type="submit">Login</button>
                <a href="index.php" class="button">Utilizator</a>
                <a href="indexadmin.php" class="button">Admin</a>
            </div>
        </form>
    </div>
</div>

<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/what-input.js"></script>
<script src="js/vendor/foundation.js"></script>
<script src="js/app.js"></script>
</body>
</html>
