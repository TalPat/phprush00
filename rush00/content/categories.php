<?php

	session_start();
	include_once '../Extra/functions.php';

?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Index</title>
	<link rel="stylesheet" href="../Style/style.css">
</head>
    <?php ft_printhead('Title'); ?>
<body class="body">
	<?php ft_printheader(); ?>
	<div class="maincontent">
		<div class="container">
		<h2>Categories</h2>
		<table>
	    	<tr>
                <td><a href="list.php" style="color:#b30000;">Adventure</a></td>
                <td><a href="list.php" style="color:#b30000;">Comedy</a></td>
                <td><a href="list.php" style="color:#b30000;">Horror</a></td>
                <td><a href="list.php" style="color:#b30000;">Romance</a></td>
	    	</tr>
		</table>
	</div>
	<?php ft_printfooter(); ?>
</body>
</html>