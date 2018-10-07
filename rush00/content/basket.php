<?php

	session_start();
	include_once '../Extra/functions.php';
	include_once '../Products/products.php'
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
			<h2>Basket</h2>
			<table>
			<?PHP 
				if (addto_basket())
				{
					$articles = count($_SESSION['array']);
					if ($atricles <= 0)
						echo "<tr><td>Currently no items in basket</td></tr>";
					else
					{
						for ($i = 0; $i < $articles; i++)
						{
							echo "<tr>";
							echo "<td>"$_SESSION['product_name']"</td>";
							echo "<td>"$_SESSION['quantity']"</td>"
							echo "<td>"$_SESSION['price']"</td>";
							echo "</tr>";
						}
					}
				}
			?>
				<tr>
					<td>$product_name:</td>
				</tr>
				<tr>
					<td>$product_name:</td>
				</tr>
				<tr>
					<td class="button"><input type="submit" name="OK" value="Confirm Order"></td>
					<td><input type="submit" name="OK" value="Cancel Order"></td>
				</tr>
			</table>
		</div>
	</div>
	<?php ft_printfooter(); ?>
</body>
</html>