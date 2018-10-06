<?PHP
	session_start();

	require_once('products.php');
	if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['id'])
	{
		$movies = product_byid($_POST('id'));
		if ($_POST['quantity'] && is_numeric($_POST['quantity']) && $_POST['quantity'] > 0 && $movies)
		{
			$basket = unserialize($_SESSION['basket_product']);
			if ($basket[$_POST['id']])
			{
				$basket[$_POST['id']] += $_POST['quantity'];
				$_SESSION['basket_count'] += $_POST['quantity'];
				$_SESSION['basket_price'] += $movies['price'] * $_POST['quantity'];
			}
			else
			{
				
			}
		}
	}

	if ($_GET['remove'] == '1') 
	{
		$_SESSION['basket_product'] = NULL;
		$_SESSION['basket_price'] = NULL;
		$_SESSION['basket_count'] = NULL;
	}

	?>