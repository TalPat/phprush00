<?php

	session_start();
	include_once '../Extra/functions.php';

?>

<html lang="en">
<?php ft_printhead('Title'); ?>
<body>
	<?php ft_printheader(); ?>
	<div class="maincontent">
		<h2>Login</h2>
		<form action="checklogin.php" method="POST">
			<table>
				<tr>
					<td>Email:</td>
					<td><input type="text" name="login" placeholder="email" required></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input type="password" name="login" required></td>
				</tr>
				<tr>
					<td><input type="submit" name="OK" value="Login"></td>
				</tr>
			</table>
		</form>
	</div>
	<?php ft_printfooter(); ?>
</body>
</html>
