<?PHP ?>
	<html class="header">
		<div class="logo">
			<a href="home.php"><img src="Img/logo.png" alt=""></a>
		</div>
		<div class="menu">
			<a href="home.php">HOME</a>
			<a href="browse.php">BROWSE MOVIES</a>
			<a href="Categories.php">CATEGORIES</a>
			<a href="basket.php"><img src="Img/basket.png" alt=""></a>
			<input type="text" placeholder="Search...">
		</div>
		<div class="login">
			<?PHP
				if (isset($_SESSION['username']) && !empty($_SESSION['username']))

				else
					
			?>
		</div>
