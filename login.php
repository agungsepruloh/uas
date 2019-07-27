<?php 

session_start();

if ( isset($_SESSION['login']) ) {
    header('Location: index.php');
    exit;
}

if ( isset($_POST["go"]) ) {

    if ($_POST['name'] != NULL && $_POST['email'] != NULL) {
            $_SESSION['login'] = true;
            $_SESSION['name'] = $_POST['name'];
            header('Location: index.php');
    }

    $error = true;
}

?>

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
                        <li><a href="products.php">Products</a></li>
                        <?php if ( isset($_SESSION['login'])) : ?>
                            <li><a href="logout.php">Logout</a></li>
                        <?php endif; ?>
                    </ul>
                </nav>
            </div>
        </header>

        <section id="main">
            <div class="container product">
                <h1 class="page-title">Guest Page</h1>

                <div class="dark login">
                    <form action="" method="post" class="quote">
                        <?php if( isset($error)) : ?>
                            <p style="color: red; text-align: center"><i>Please fill all the field!</i></p>
                        <?php endif; ?>
                        <div>
                            <label for="name">Name</label> <br>
                            <input type="text" id="name" name="name" placeholder="Name">
                        </div>
                        <div>
                            <label for="email">Email</label> <br>
                            <input type="email" id="email" name="email" placeholder="Email Address">
                        </div>
                        <div>
                            <button class="button_1" type="submit" name="go">Go</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <footer>
            <p>Food Website, Copyright &copy; <?= date('Y') ?></p>
        </footer>
    </body>

</html>