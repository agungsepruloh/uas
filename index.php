<?php 
session_start();

if ( !isset($_SESSION['login']) ) {
  header('Location: login.php');
  exit;
}

?>

<!DOCTYPE html>
<html>

    <head>
        <title>Pizza Party | Welcome</title>
        <link rel="stylesheet" href="./css/style.css">
        <link href="./img/logo.ico" rel="shortcut icon">
    </head>

    <body>
        <header>
            <div class="container">
                <div id="branding">
                    <h1><span class="highlight">Pizza</span> Party</h1>
                </div>
                <nav>
                    <ul>
                        <li class="current"><a href="index.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="services.php">Services</a></li>
                        <li><a href="products.php">Products</a></li>
                        <?php if ( isset($_SESSION['login'])) : ?>
                            <li><a href="logout.php">Logout</a></li>
                        <?php endif; ?>
                    </ul>
                </nav>
            </div>
        </header>

        <section id="showcase">
            <div class="container">
                <h1>Hello, <?= $_SESSION['name'] . '!'; ?></h1>
                <p>All You Need is Pizza. Love at First Bite. Eat, Drink, and Be Lazy. Order it now!</p>
            </div>
        </section>

        <section id="line">
            <div class="container"></div>
        </section>

        <section id="boxes">
            <div class="container product">
                <div class="box">
                    <img src="./img/logo-plus.png">
                    <h3>Love at First Bite</h3>
                    <p>Rasakan sensasi kelezatan dan nikmatnya Pizza (merk). Kelezatan yang belum pernah dirasakan sebelumnya yang bikin nagih!</p>
                </div>
                <div class="box">
                    <img src="./img/logo-plus2.png" style="width: 50%;">
                    <h3>Good Quality, Cheap Price</h3>
                    <p>Harga murah, kualitas tidak kalah dengan restoran sebelah</p>
                </div>
                <div class="box">
                    <img src="./img/logo-plus3.png" style="width: 39%;">
                    <h3>Only with the best ingredients</h3>
                    <p>Produk ini dibuat dengan bahan dasar yang berkualitas serta diolah dengan orang-orang yang berpengalaman</p>
                </div>
            </div>
        </section>

        <footer>
            <p>Food Website, Copyright &copy; <?= date('Y') ?></p>
        </footer>
    </body>

</html>