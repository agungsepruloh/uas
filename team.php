<?php 
include 'creator.php';
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
        <link href="./img/logo.ico" rel="shortcut icon">
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./css/style_team.css">
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
                        <li class="current"><a href="team.php">Team</a></li>
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
            <h1 class="heading">Meet The Team</h1>
			<div class="card-wrapper">
				<?php foreach ($data as $key => $value): ?>
					<div class="card">
						<img src="img/profile_pic/bg.jpg" alt="card background" class="card-img">
						<img src="img/profile_pic/<?php echo $value['foto']; ?>" alt="profile image" class="profile-img">
						<h1><?php echo $value['nama']; ?></h1>
						<p class="job-tittle"><?php echo $value['pekerjaan']; ?></p>
						<p class="about">
							<?php echo $value['about']; ?>
						</p>
						<a href="#" onclick="alert('Anda bisa menghubungi saya di <?php echo $value['contact']; ?>')" class="btn">Contact</a>
					</div>
				<?php endforeach ?>
			</div>
        </section>

        <footer>
            <p>Food Website, Copyright &copy; <?= date('Y') ?></p>
        </footer>
    </body>

</html>