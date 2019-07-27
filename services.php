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
        <title>Food Website | Services</title>
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
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li class="current"><a href="services.php">Services</a></li>
                        <li><a href="products.php">Products</a></li>
                        <?php if ( isset($_SESSION['login'])) : ?>
                            <li><a href="logout.php">Logout</a></li>
                        <?php endif; ?>
                    </ul>
                </nav>
            </div>
        </header>

        <section id="line">
            <div class="container"></div>
        </section>

        <section id="main">
            <div class="container product">
                <article id="main-col">
                    <h1 class="page-title">Services</h1>
                    <ul id="services">
                        <li>
                            <h3>Website Design</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mi augue, viverra sit
                                amet ultricies at, vulputate id lorem. Nulla facilisi.</p>
                            <p>Pricing: $1,000 - $3,000</p>
                        </li>
                        <li>
                            <h3>Website Maintenance</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mi augue, viverra sit
                                amet ultricies at, vulputate id lorem. Nulla facilisi.</p>
                            <p>Pricing: $250 per month</p>
                        </li>
                        <li>
                            <h3>Website Hosting</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mi augue, viverra sit
                                amet ultricies at, vulputate id lorem. Nulla facilisi.</p>
                            <p>Pricing: $25 per month</p>
                        </li>
                    </ul>
                </article>

                <aside id="sidebar">
                    <div class="dark">
                        <h3>Get A Quote</h3>
                        <form class="quote">
                            <div>
                                <label>Name</label><br>
                                <input type="text" placeholder="Name">
                            </div>
                            <div>
                                <label>Email</label><br>
                                <input type="email" placeholder="Emial Address">
                            </div>
                            <div>
                                <label>Message</label><br>
                                <textarea placeholder="Message"></textarea>
                            </div>
                            <button class="button_1" type="submit">Send</button>
                        </form>
                    </div>
                </aside>
            </div>
        </section>

        <footer>
            <p>Food Website, Copyright &copy; <?= date('Y') ?></p>
        </footer>
    </body>

</html>