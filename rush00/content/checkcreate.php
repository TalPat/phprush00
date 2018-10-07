<?php

	session_start();
	include_once '../Extra/functions.php';
	$exists = 0;
	$conn = ft_connect_database();
	$sql = "SELECT email FROM Users";
	$result = mysqli_query($conn, $sql);
	while($row = mysqli_fetch_assoc($result))
	{
		if ($row[email] == $_POST[login])
		{
			$exists = 1;
			break;
		}
	}
	if ($exists == 1)
	{
		$output = "Email already in use";
	}
	else
	{
		$sql =	
			"INSERT INTO Users (username, email, passwd, firstname, lastname, address, gender, access_keys)
			VALUES ('".$_POST[username]."', '".$_POST[login]."', '".hash("whirlpool",$_POST[passwd])."', '".$_POST[first]."', '".$_POST[last]."', '', '0', '');";
		if (mysqli_query($conn, $sql))
		{
			$output = 'Registration successful. Go to your <a href="user.php">user page</a>.';
		}
		else
		{
			$output = "Unable to add to table ".mysqli_error($conn)."\n";
		}
		$sql = "SELECT userid, username FROM Users WHERE email = '".$_POST[login]."'";
		$result = mysqli_query($conn, $sql);
		$_SESSION[username] = $row[username];
		$_SESSION[userid] = $row[userid];
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
