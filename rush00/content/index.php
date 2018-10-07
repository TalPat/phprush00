<?php

	session_start();
	include_once '../Extra/functions.php';

?>

<html lang="en">

<?php ft_printhead('Title'); ?>

<body>
	<?php ft_printheader(); ?>
	<div class="maincontent">
		<h2>Trending</h2>
		<?php ft_printtrending(); ?>
		<h2>New Movies</h2>
		<?php ft_printnew(); ?>
	</div>
	<?php ft_printfooter(); ?>
</body>
</html>
