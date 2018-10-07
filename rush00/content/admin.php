<?php

	session_start();
	include_once '../Extra/functions.php';
	ft_admincheck();

?>

<html lang="en">

<?php ft_printhead('Title'); ?>

<body>
	<?php ft_printheader(); ?>
	<div class="maincontent">
		<h2>Admin Page</h2>
		<a href="../Database/install.php">Initialize database</a><br>
		<a href="add.php">Add product</a><br>
		<a href="remove.php">Remove product</a><br>
		<a href="csvgen.php">Generate from CSV</a><br>
		<a href="addadmin.php">Change admin user</a><br>
	</div>
	<?php ft_printfooter(); ?>
</body>
</html>
