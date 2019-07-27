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
        <title>Food Website | Welcome</title>
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="css/second.css">
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

                <div class="box">
                    <img src="./img/products/pizza1.jpg">
                    <h3>Pizza With Berries</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mi augue, viverra sit amet
                        ultricies</p>
                </div>
                <div class="box">
                    <img src="./img/products/pizza2.jpg">
                    <h3>Cheese Pepperoni Pizza</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mi augue, viverra sit amet
                        ultricies</p>
                </div>
                <div class="box">
                    <img src="./img/products/pizza4.jpg">
                    <h3>Classic Pizza</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mi augue, viverra sit amet
                        ultricies</p>
                </div>

                <div class="box">
                    <img src="./img/products/pizza6.jpg">
                    <h3>Pepperoni Pizza</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mi augue, viverra sit amet
                        ultricies</p>
                </div>
                <div class="box">
                    <img src="./img/products/pizza3.jpg">
                    <h3>Pizza Box</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mi augue, viverra sit amet
                        ultricies</p>
                </div>
                <div class="box">
                    <img src="./img/products/pizza5.jpg">
                    <h3>Round Pizza</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mi augue, viverra sit amet
                        ultricies</p>
                </div>
            </div>
        </section>

        <section id="product">
            <div class="container product">
                <h1 class="page-title">Dri<span class="highlight">nks</span></h1>

                <div class="box">
                    <img src="./img/products/drink1.jpg">
                    <h3>Water and Lemon</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mi augue, viverra sit amet
                        ultricies</p>
                </div>
                <div class="box">
                    <img src="./img/products/drink2.jpg">
                    <h3>Lemon Juice</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mi augue, viverra sit amet
                        ultricies</p>
                </div>
                <div class="box">
                    <img src="./img/products/drink3.jpg">
                    <h3>Liquor Pouring</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mi augue, viverra sit amet
                        ultricies</p>
                </div>

                <div class="box">
                    <img src="./img/products/drink4.jpg">
                    <h3>Lemon and Strawberry Juice</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mi augue, viverra sit amet
                        ultricies</p>
                </div>
                <div class="box">
                    <img src="./img/products/drink5.jpg">
                    <h3>Watermelon with Lemon</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mi augue, viverra sit amet
                        ultricies</p>
                </div>
                <div class="box">
                    <img src="./img/products/drink6.jpg">
                    <h3>Sliced Citrus Fruit</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mi augue, viverra sit amet
                        ultricies</p>
                </div>
            </div>
        </section>


        <footer>
            <p>Food Website, Copyright &copy; <?= date('Y') ?></p>
        </footer>
    </body>

</html>