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
        <title>Pizza Party | About</title>
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
                        <li><a href="index.php">Home</a></li>
                        <li class="current"><a href="about.php">About</a></li>
                        <li><a href="services.php">Services</a></li>
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
                    <h1 class="page-title">About Us</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec varius auctor lacus nec feugiat.
                        Phasellus sit amet ex ipsum. Praesent pharetra tincidunt tempor. Etiam velit eros, dapibus eget
                        porta in, lacinia et magna. Nam eget eros non orci consectetur congue at ac augue. Proin eget
                        arcu in enim feugiat ultricies. Curabitur maximus metus nec metus pretium viverra at et orci.
                        Integer hendrerit ante ut placerat cursus.
                    </p>
                    <p class="dark">
                        Aliquam eget pharetra diam. Nulla placerat lorem at turpis tempor, vel ultrices dui tincidunt.
                        Proin quis egestas lorem. Mauris vehicula lectus odio, sit amet dictum justo feugiat a. Praesent
                        id dictum lacus. Sed ullamcorper id erat ut dictum. Fusce porttitor lorem sapien, in aliquet
                        sapien convallis et. Donec nec mauris nulla. Curabitur cursus semper odio, et hendrerit ante.
                        Nunc at cursus ante. Maecenas gravida ligula ut efficitur suscipit. Nulla id turpis varius,
                        pretium nunc sed, fermentum sem. Sed lacinia nunc non interdum pellentesque.
                    </p>
                </article>

                <aside id="sidebar">
                    <div class="dark">
                        <h3>What We Do</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec varius auctor lacus nec
                            feugiat. Phasellus sit amet ex ipsum. Praesent pharetra tincidunt tempor. Etiam velit eros,
                            dapibus eget porta in, lacinia et magna</p>
                    </div>
                </aside>
            </div>
        </section>

        <footer>
            <p>Food Website, Copyright &copy; <?= date('Y') ?></p>
        </footer>
    </body>

</html>