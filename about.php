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
                        <li><a href="team.php">Team</a></li>
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
                    <p style="text-align: justify; text-indent: 20px">
                        As the franchisee in Indonesia, Pizza Party owns the right to develop and operate Pizza Party restaurants across
                        Indonesia based on the international franchise agreement with Pizza Party Restaurants Asia Ltd. At present, with the
                        exception of the outlet at the airport, Pizza Party is the master franchisee of Pizza in Indonesia. Pizza Party has
                        successfully received the Asia Franchisee of the Year award from YUM! Pizza Party Asia for the year 2015, 2016, 2017,
                        2018, and 2019.
                    </p>

                    <p style="text-align: justify; text-indent: 20px">
                        Pizza Party offers innovative and extensive menus that cater Indonesian consumers, targeting middle-class teenagers and
                        families. Pizza Party is popularly known for its original pan pizza and its iconic cheesy bites menu. Pizza Party as
                        developed two different concepts, namely the PHR and PHD outlets. Pizza Party offers dine-in service, delivery service,
                        and online sales with extensive network. Pizza Party believes that its current sales concepts and channels will provide
                        flexibility for sustainable growth. Therefore, Pizza Party continues to create innovations in its menu selection by
                        adapting the menu according to the palate of Indonesian people, and to improve its services to customers.
                    </p>

                    <p style="text-align: justify; text-indent: 20px">
                        The Company was established in 2009 and is engaging businesses in a consumer foodservice industry, particularly pizza in
                        Indonesia through the franchise owned by the Company. After developed the Pizza Party brand in Indonesia, the Company
                        was acquired by Sriboga Group in 2016, and since the acquisition, the growth of the Company’s outlets was rapidly
                        increase. The Company has been supported by Sriboga Group with various support and guidance from SRR or other company in
                        Sriboga group. Based on the Euromonitor's Report, in 2016 the Company was the largest pizza chain and, with a market
                        share of 86.6%, with PHR holding a 97.0% market share and PHD holding a 64.6% market share. As of December 31, 2017, the
                        Company operated 237 PHR outlets and 156 PHD outlets located in 28 provinces in Indonesia. In addition on February 2018,
                        the Company owns 397 combined PHR and PHD outlets. The Company's restaurants and outlets offer a wide range of high
                        quality pizza and complementary menus to its customers.
                    </p>

                    <p class="dark" style="text-align: justify">
                        Pizza Party recognizes the importance of having a Halal Certificate for a foodservice company in a Muslim-majority
                        country. In 2014, Pizza Party obtained the halal certificate from MUI. Up to now, Pizza Party continues to maintain its
                        halal certification with the commitment to continuously provide halal products to provide convenience, security and
                        satisfaction to consumers.
                    </p>
                </article>

                <aside id="sidebar">
                    <div class="dark">
                        <h3>What We Do</h3>
                        <p>The Company recognizes the importance of having a Halal Certificate for a foodservice company in a Muslim-majority
                        country. In 2014, the Company obtained the halal certificate from MUI.</p>
                        <p>Up to now, the Company continues to maintain its
                        halal certification with the commitment to continuously provide halal products to provide convenience, security and
                        satisfaction to consumers.</p>
                    </div>
                </aside>
            </div>
        </section>

        <footer>
            <p>Pizza Party, Copyright &copy; <?= date('Y') ?></p>
        </footer>
    </body>

</html>