<?php 
session_start();

if ( !isset($_SESSION['login']) ) {
    header('Location: login.php');
    exit;
}

require('list.php');

?>

<!DOCTYPE html>
<html>

    <head>
        <title>Pizza Party | Welcome</title>
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="css/second.css">
        <link href="./img/logo.ico" rel="shortcut icon">
        <style>
            .btn {
                padding: 5px;
                min-width: 100px;
            }
            .box {
                float: none!important;
                display: inline-block;
            }
            .product {
                padding-bottom: 20px;
            }
        </style>
    </head>

    <body>
        <header>
            <div class="container">
                <div id="branding">
                    <h1><span class="highlight">Pizza</span> Party</h1>
                </div>
                <nav>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="services.php">Services</a></li>
                        <li class="current"><a href="products.php">Products</a></li>
                        <?php if ( isset($_SESSION['login'])) : ?>
                            <li><a href="logout.php">Logout</a></li>
                        <?php endif; ?>
                    </ul>
                </nav>
            </div>
        </header>

        <section id="product">
            <div class="container product">
                <h1 class="page-title">Transaction</h1>
                <?php
                if($_SERVER['REQUEST_METHOD'] == 'POST') {
                    echo '
                    <input type="text" name="nama" id="">
                    <input type="text" name="pesanan" id="" value="'.$foodsanddrinks[$_POST['id']]['nama'].'" readonly>
                    <input type="text" name="jumlah" id="" value="'.$_POST['jumlah'].'" readonly>
                    <input type="text" name="harga" id="" value="'.$foodsanddrinks[$_POST['id']]['harga'].'" readonly>
                    <input type="text" name="totalharga" value="'.$foodsanddrinks[$_POST['id']]['harga'] * $_POST['jumlah'].'" id="" readonly>
                    ';
                }
                ?>
                
            </div>
        </section>

        <footer>
            <p>Food Website, Copyright &copy; <?= date('Y') ?></p>
        </footer>
    </body>

    <script>
    </script>
</html>