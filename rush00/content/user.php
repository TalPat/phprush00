<?php

	session_start();
	include_once '../Extra/functions.php';

?>

<html lang="en">

<?php ft_printhead('Title'); ?>

<body>
	<?php ft_printheader(); ?>
	<div class="maincontent">
		<h2>Your Films</h2>
		<?php ft_printtrending(); ?>
	</div>
	<?php ft_printfooter(); ?>
</body>
</html>
