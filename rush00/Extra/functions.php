<?php

	function ft_printheader()
	{
		if (isset($_SESSION['username']) && !empty($_SESSION['username']))
			$logstat = '<p>Logged in as '.$_SESSION[username].'</p>';
		else
			$logstat = '<a href="login.php">Login</a>';
		print(
			'<div class="header">
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
					'.$logstat.'
				</div>
			</div>'
		);
	}

	function ft_printfooter()
	{
		print(
			'<div class="footer">
			</div>'
		);
	}

	function ft_printhead($title)
	{
		print(
			'<head>
				<title>'.$title.'</title>
				<link rel="stylesheet" type="text/css" href="doft.css">
			</head>'
		);
	}

	function ft_printtrending()
	{

	}

	function ft_printnew()
	{
		
	}

?>
