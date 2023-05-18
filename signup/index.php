<?php
session_start();

if (isset($_SESSION["signin"])) {
    header("Location: ../");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Aksara Diskret">
    <title>Sign Up | Aksara Diskret</title>
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <link rel="stylesheet" href="../css/mform.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="icon" type="image/svg+xml" href="../assets/favicon/ad-light.svg" media="(prefers-color-scheme: dark)">
    <link rel="icon" type="image/svg+xml" href="../assets/favicon/ad-dark.svg" media="(prefers-color-scheme: light)">
</head>

<body>
    <header>
        <a href="../"><img src="../assets/icon/ad-logo.svg" alt="Aksara Diskret Logo"></a>
        <nav>
            <ul id="nav-list">
                <li><a href="../faq">FAQ</a></li>
                <li><a href="../about">About</a></li>
                <li id="close-icon" onclick="closeMenu()">
                    <img src="../assets/icon/remixicon-close-line.svg" alt="Close Icon">
                </li>
            </ul>
        </nav>
        <div id="menu-icon" onclick="showMenu()"><img src="../assets/icon/remixicon-menu-5-line.svg" alt="Menu Icon">
        </div>
    </header>
    <div class="app-container">
        <main>
            <h1>Sign Up to make account</h1>
            <form>
                <input type="text" id="first-name" class="rounded-box" placeholder="First Name">
                <input type="text" id="last-name" class="rounded-box" placeholder="Last Name">
                <input type="email" name="email" class="rounded-box" placeholder="Email Address">
                <div class="pass-box">
                    <input type="password" name="password" class="rounded-box default-password" placeholder="Password" required>
                    <img id="h-default-pass" src="../assets/icon/remixicon-eye-line.svg" alt="Hide Password Icon">
                    <img id="s-default-pass" src="../assets/icon/remixicon-eye-off-line.svg" alt="Show Password Icon">
                </div>
                <button type="button" class="rounded-box primary-btn" id="data-btn" onclick="LoadData()">Sign
                    Up</button>
                <span class="failed"></span>
                <p>Already have an Account? <a href="../signin" class="link">Sign In</a></p>
            </form>
        </main>
        <footer>
            <p>Copyright ©️ 2023 <b>Aksara Diskret</b>.</p>
            <p>Made with ❤️ by <b>AD</b> Team.</p>
        </footer>
    </div>
    <script src="../js/main.js"></script>
</body>

</html>