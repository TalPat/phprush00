<?php

	session_start();
	include_once '../Extra/functions.php';
	ft_admincheck();
	$conn = ft_connect_database();
	if ($_POST[OK])
	{
		$sql = 
			"INSERT INTO Product (name, price, )
			VALUES ();";
		if (mysqli_query($conn, $sql)
		{
			$output = "New record created successfully";
		}
		else
		{
			$output = "Unable to add to table";
		}
	}
	else
		header("location: add.php");

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
