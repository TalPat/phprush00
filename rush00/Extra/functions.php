<?php

	function ft_printheader()
	{
		if (isset($_SESSION['username']) && !empty($_SESSION['username']))
			$logstat =
				'<p>Logged in as '.$_SESSION[username].'</p>
				<a href="logout.php">Logout</a>';
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

	function ft_connect_database()
	{
		$servername = "localhost";
		$dbusername = "root";
		$dbpassword = "sixteen";
		$dbname = "rush00";

		$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);
		if (!$conn)
			die("Connection failed: " . mysqli_connect_error());
		echo "Connected successfully"."\n";
		return ($conn);
	}

	function ft_create_database()
	{
		$servername = "localhost";
		$dbusername = "root";
		$dbpassword = "sixteen";
		$dbname = "rush00";

		$conn = mysqli_connect($servername, $dbusername, $dbpassword);
		if (!$conn)
			die("Connection failed: " . mysqli_connect_error());
		$sql = "CREATE DATABASE IF NOT EXISTS ".$dbname;
		if (mysqli_query($conn, $sql))
			echo "Database created successfully"."\n";
		else
			echo "Error creating database: " . mysqli_error($conn)."\n";
		mysqli_close($conn);
	}

	function ft_admincheck()
	{
		if (!$_SESSION[admin])
			header('location: ../content/adminlogin.php');
	}
?>
