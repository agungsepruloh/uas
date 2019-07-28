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
        <title>Food Website | Welcome</title>
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="css/second.css">
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
                    <h1><span class="highlight">Food</span> Website</h1>
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
                <h1 class="page-title"><span class="highlight">Fo</span>ods</h1>

                <?php
                    foreach($foodsanddrinks as $k => $v) {
                        if($v['tipe'] == 'food') {
                            echo '
                            <div class="box">
                                <img src="'.$v['gambar'].'">
                                <h3 id="'.$k.'">'.$v['nama'].'</h3>
                                <p><b>Rp'.number_format($v['harga'], 0, ',', '.').'</b></p>
                                <button class="btn" onclick="beli()">Beli</button>
                            </div>
                            ';
                        }
                    }
                ?>
                
            </div>
        </section>

        <section id="product">
            <div class="container product">
                <h1 class="page-title">Dri<span class="highlight">nks</span></h1>
                <?php
                    foreach($foodsanddrinks as $k => $v) {
                        if($v['tipe'] == 'drink') {
                            echo '
                            <div class="box">
                                <img src="'.$v['gambar'].'">
                                <h3>'.$v['nama'].'</h3>
                                <p><b>Rp'.number_format($v['harga'], 0, ',', '.').'</b></p>
                                <button class="btn" id="'.$k.'" onclick="beli('.$k.')">Beli</button>
                            </div>
                            ';
                        }
                    }
                ?>
                
            </div>
        </section>

        <form method="post" action="transaksi.php" name="transaksi">
            <input type="hidden" name="id">
            <input type="hidden" name="jumlah">
        </form>

        <footer>
            <p>Food Website, Copyright &copy; <?= date('Y') ?></p>
        </footer>
    </body>

    <script>
        function beli(id) {
            jumlah = prompt('Masukkan jumlah yang ingin dibeli');
            transaksi.id.value = id;
            transaksi.jumlah.value = jumlah;
            transaksi.submit();
        }
    </script>
</html>