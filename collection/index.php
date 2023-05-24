<?php

session_start();
require "../config/functions.php";

if (!isset($_SESSION["signin"]) && !isset($_SESSION["signinUser"]) && !isset($_COOKIE["secret"])) {
    header("Location: ../signin");
    exit;
}

// retrieve the username with these conditions when the browser is closed then opened again

if (isset($_COOKIE["secret"])) {


    $signin = $_COOKIE["signin"];
    $data = mysqli_query($db, "SELECT * FROM admin WHERE id = $signin");
    if (mysqli_affected_rows($db) === 0) {
        $hasil = mysqli_query($db, "SELECT CONCAT(first_name, ' ' ,last_name) AS USERNAME FROM users WHERE id = $signin");
        $row = mysqli_fetch_assoc($hasil);
        $_SESSION["USERNAME"] = $row["USERNAME"];
    }
}

$_SESSION["signin"] = true;
$_SESSION["signinUser"] = true;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Aksara Diskret">
    <title>Books Collection | Aksara Diskret</title>
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <link rel="stylesheet" href="../css/collection.css">
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
                <?php if (FeaturePrivilege() || isset($_SESSION["idAdmin"])) : ?>
                    <li>
                        <a href="../admin">Admin</a>
                    </li>
                <?php endif; ?>
                <li><a href="../faq">FAQ</a></li>
                <li><a href="../about">About</a></li>
            </ul>
        </nav>
        <div id="nav-icon" onclick="mobileNav()">
            <img id="menu-icon" src="../assets/icon/remixicon-menu-5-line.svg" alt="Menu Icon">
            <img id="close-icon" src="../assets/icon/remixicon-close-line.svg" alt="Close Icon">
        </div>
    </header>
    <div class="app-container">
        <main>
            <div class="account">
                <div class="data">
                    <p>Welcome,</p>
                    <div class="account-menu">
                        <?php if (isset($_SESSION["USERNAME"])) : ?>
                            <span id="user">
                                <?= $_SESSION["USERNAME"] ?>
                            </span>
                        <?php else : ?>
                            <span id="user">Aksara Diskret</span>
                        <?php endif; ?>
                        <a href="../settings"><img src="../assets/icon/remixicon-settings-3-line.svg" alt="Settings Icon"></a>
                    </div>
                </div>
                <a href="../signout" class="rounded-box btn primary-btn">Sign Out</a>
            </div>
            <hr>
            <h1>Books Collection</h1>
            <div class="books-content">
                <a href="../assets/book/AD-Secret-Book.pdf" class="rounded-box books-item" download>
                    <div class="book">
                        <img src="../assets/image/deepmind-esyG2Jt_uIc-unsplash.jpg" alt="Book Cover">
                        <div class="books-info">
                            <h2>Learning Algorithm</h2>
                            <p>Karen Liu</p>
                        </div>
                    </div>
                    <div class="isbn"><b>ISBN</b><br>9787825426666</div>
                </a>
                <a href="../assets/book/AD-Secret-Book.pdf" class="rounded-box books-item" download>
                    <div class="book">
                        <img src="../assets/image/deepmind-X5CSjHTjlgw-unsplash.jpg" alt="Book Cover">
                        <div class="books-info">
                            <h2>Neural Network</h2>
                            <p>Andrew Kim</p>
                        </div>
                    </div>
                    <div class="isbn"><b>ISBN</b><br>9786011789073</div>
                </a>
                <a href="../assets/book/AD-Secret-Book.pdf" class="rounded-box books-item" download>
                    <div class="book">
                        <img src="../assets/image/deepmind-mWztzk66I7Q-unsplash.jpg" alt="Book Cover">
                        <div class="books-info">
                            <h2>Singularity Paradox</h2>
                            <p>Olivia Chen</p>
                        </div>
                    </div>
                    <div class="isbn"><b>ISBN</b><br>9780258222782</div>
                </a>
                <a href="../assets/book/AD-Secret-Book.pdf" class="rounded-box books-item" download>
                    <div class="book">
                        <img src="../assets/image/deepmind-3VSgApkySLA-unsplash.jpg" alt="Book Cover">
                        <div class="books-info">
                            <h2>AI Rebellion</h2>
                            <p>Ethan Zhang</p>
                        </div>
                    </div>
                    <div class="isbn"><b>ISBN</b><br>9782335341133</div>
                </a>
                <a href="../assets/book/AD-Secret-Book.pdf" class="rounded-box books-item" download>
                    <div class="book">
                        <img src="../assets/image/wilhelm-gunkel-aEECAd2HuUE-unsplash.jpg" alt="Book Cover">
                        <div class="books-info">
                            <h2>The Glass House</h2>
                            <p>Jane Sanchez</p>
                        </div>
                    </div>
                    <div class="isbn"><b>ISBN</b><br>9782463696112</div>
                </a>
                <a href="../assets/book/AD-Secret-Book.pdf" class="rounded-box books-item" download>
                    <div class="book">
                        <img src="../assets/image/mk-s-_j0Wjh0Ya8I-unsplash.jpg" alt="Book Cover">
                        <div class="books-info">
                            <h2>Designing Realities</h2>
                            <p>Kevin Chen</p>
                        </div>
                    </div>
                    <div class="isbn"><b>ISBN</b><br>9785240080548</div>
                </a>
                <a href="../assets/book/AD-Secret-Book.pdf" class="rounded-box books-item" download>
                    <div class="book">
                        <img src="../assets/image/ivan-aleksic-FoYLV60_eHY-unsplash.jpg" alt="Book Cover">
                        <div class="books-info">
                            <h2>Blueprint for Chaos</h2>
                            <p>Matthew Davis</p>
                        </div>
                    </div>
                    <div class="isbn"><b>ISBN</b><br>9785862813142</div>
                </a>
                <a href="../assets/book/AD-Secret-Book.pdf" class="rounded-box books-item" download>
                    <div class="book">
                        <img src="../assets/image/erol-ahmed-5nFU8l0RDiY-unsplash.jpg" alt="Book Cover">
                        <div class="books-info">
                            <h2>The Hidden City </h2>
                            <p>Carlos Rodriguez</p>
                        </div>
                    </div>
                    <div class="isbn"><b>ISBN</b><br>9782463696112</div>
                </a>
            </div>
        </main>
        <footer>
            <p>Copyright ©️ 2023 <b>Aksara Diskret</b>.</p>
            <p>Made with ❤️ by <b>AD</b> Team.</p>
        </footer>
    </div>
    <script src="../js/main.js"></script>
</body>

</html>