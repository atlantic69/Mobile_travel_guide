<!---->
<?php
	$mysql = new mysqli('MP', 'mysql', '', 'mop');
	$pull_attraction = $mysql->query("SELECT * FROM `dost` WHERE `added_on_map` IS NULL LIMIT 1");
	$attraction = $pull_attraction->fetch_assoc();

	$id_dost = $attraction['id'];
	$title = $attraction['title'];
	$author = $attraction['author'];
	$country = $attraction['country'];
	$state = $attraction['state'];
	$address = $attraction['address'];
	$coorX = $attraction['coorX'];
	$coorY = $attraction['coorY'];
	$description = $attraction['description'];
	$rating = $attraction['rating'];
	$photo = $attraction['photo'];

	$mysql->close();
?>