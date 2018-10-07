<?php

	session_start();
	include_once '../Extra/functions.php';
	ft_admincheck();

?>

<html lang="en">

<?php ft_printhead('Title'); ?>

<html lang="en">
<?php ft_printhead('Title'); ?>
<body>
	<?php ft_printheader(); ?>
	<div class="maincontent">
		<h2>Add Product</h2>
		<form action="addexec.php" method="POST">
			<table>
				<tr>
					<td>Title:</td>
					<td><input type="text" name="title"  ></td>
				</tr>
				<tr>
					<td>Price:</td>
					<td><input type="password" name="price"  ></td>
				</tr>
				<tr>
					<td>Release date:</td>
					<td><input type="text" name="release" ></td>
				</tr>
				<tr>
					<td>Rating:</td>
					<td><input type="password" name="rating"  ></td>
				</tr>
				<tr>
					<td>Actors:</td>
					<td><input type="text" name="actors" ></td>
				</tr>
				<tr>
					<td>Director:</td>
					<td><input type="password" name="director"  ></td>
				</tr>
				<tr>
					<td>Genres:</td>
					<td><input type="text" name="genres" ></td>
				</tr>
				<tr>
					<td>Image:</td>
					<td><input type="password" name="image"  ></td>
				</tr>
				<tr>
					<td>Description:</td>
					<td><input type="password" name="description"  ></td>
				</tr>
				<tr>
					<td><input type="submit" name="OK" value="Submit"></td>
				</tr>
			</table>
		</form>
	</div>
	<?php ft_printfooter(); ?>
</body>
</html>
