<?PHP

	include_once("../Extra/functions.php");

	ft_create_database();

	$conn = ft_connect_database();

	$sql = "CREATE TABLE 'Users'
	(
		id int(10) unsigned NOT NULL AUTO_INCREMENT,
		username varchar(30) NOT NULL,
  		email varchar(255) NOT NULL,
  		passwd varchar(100) NOT NULL,
  		firstname varchar(45) NOT NULL,
  		lastname varchar(45) NOT NULL,
  		address varchar(100) NOT NULL,
  		gender tinyint(1) DEFAULT '0',
		'access_keys' varchar(4095) NOT NULL,
  		PRIMARY key ('id')
	)";

	if (mysqli_query($conn, $sql)) {
		echo "Table Users created successfully";
	} else {
		echo "Error creating table: " . mysqli_error($conn);
	}

	$sql = "CREATE TABLE 'Product'
	(
		`id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  		`title` varchar(100) NOT NULL,
  		`price` double unsigned NOT NULL,
		'release' date NOT NULL,
		'rating' float(4) NOT NULL,
		'actors' varchar(2047) NOT NULL,
		'director' varchar(255) NOT NULL,
		'genres' varchar(2047) NOT NULL,
		'image' varchar(1024) NOT NULL,
		'description' varchar(2047) NOT NULL,
		'access_key' varchar(10) NOT NULL,
  		PRIMARY key ('id')
	)";

	if (mysqli_query($conn, $sql)) {
		echo "Table Product created successfully";
	} else {
		echo "Error creating table: " . mysqli_error($conn);
	}
	
	mysqli_close($conn);

?>
