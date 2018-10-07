<?php

	session_start();
	include_once '../Extra/functions.php';
	$conn = ft_connect_database();
	$sql = "SELECT userid, username, email, passwd FROM Users";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result))
		{
			if (hash("whirlpool", $_POST[passwd]) == $row[passwd])
			{
				$_SESSION[user] = $row[username];
				$_SESSION[userid] = $row[userid];
				header("Location: user.php"); 
			}
			else
				$output = "Incorrect password";
    	}
	} else {
		$results = 0;
		$output = "Account does not exist";
	}

?>

<html lang="en">
<?php ft_printhead('Title'); ?>
<body>
	<?php ft_printheader(); ?>
	<div class="maincontent">
		<p><?php echo "$output"; ?></p>
	</div>
	<?php ft_printfooter(); ?>
</body>
</html>
