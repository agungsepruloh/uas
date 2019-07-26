<!DOCTYPE html>
<html>

    <head>
        <title>Food Website | Welcome</title>
        <link rel="stylesheet" href="./css/style.css">
    </head>

    <body>
        <header>
            <div class="container">
                <div id="branding">
                    <h1><span class="highlight">Food</span> Website</h1>
                </div>
                <nav>
                    <ul>
                        <li class="current"><a href="index.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="services.php">Services</a></li>
                        <li><a href="product.php">Product</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <section id="showcase">
            <div class="container">
                <h1>Affordable Professional Web</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu luctus ipsum, rhoncus semper magna.
                    Nulla
                    nec magna sit amet sem interdum condimentum.</p>
            </div>
        </section>

        <section id="line">
            <div class="container"></div>
        </section>

        <section id="boxes">
            <div class="container">
                <div class="box">
                    <img src="./img/logo_html.png">
                    <h3>HTML5 Markup</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mi augue, viverra sit amet
                        ultricies</p>
                </div>
                <div class="box">
                    <img src="./img/logo_css.png">
                    <h3>CSS3 Styling</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mi augue, viverra sit amet
                        ultricies</p>
                </div>
                <div class="box">
                    <img src="./img/logo_brush.png">
                    <h3>Graphic</h3>
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