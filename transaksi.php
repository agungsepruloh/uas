<?php 
session_start();

if ( !isset($_SESSION['login']) || $_SERVER['REQUEST_METHOD'] != 'POST' ) {
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
                    echo '
                    <center><table>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td>'.$_SESSION['name'].'</td>
                    </tr>
                    <tr>
                        <td>Pesanan</td>
                        <td>:</td>
                        <td>'.$foodsanddrinks[$_POST['id']]['nama'].'</td>
                    </tr>
                    <tr>
                        <td>Jumlah</td>
                        <td>:</td>
                        <td>'.number_format($_POST['jumlah'], 0, ',', '.').'</td>
                    </tr>
                    <tr>
                        <td>Harga</td>
                        <td>:</td>
                        <td>Rp'.number_format($foodsanddrinks[$_POST['id']]['harga'], 0, ',', '.').'</td>
                    </tr>
                    <tr>
                        <td>Total Harga</td>
                        <td>:</td>
                        <td>Rp'.number_format($foodsanddrinks[$_POST['id']]['harga'] * $_POST['jumlah'], 0, ',', '.').'</td>
                    </tr>
                    </table>
                    <br>
                    <a href="products.php"><button class="button_1" style="background-color: grey">Kembali</button></a>
                    <button onclick="simpan()" class="button_1">Submit</button></center>';
                
                ?>
                
            </div>
        </section>

        <footer>
            <p>Food Website, Copyright &copy; <?= date('Y') ?></p>
        </footer>
    </body>

    <script>
        function simpan() {
            setuju = confirm('Apakah Anda yakin?');
            if(setuju) {
                alert('Terima kasih, pesanan Anda akan segera kami kirim');
                window.location = 'index.php';
            }
        }
    </script>
</html>