<!--Получение полей строки достопримечательности, которую предложил пользователь-->
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
	$coord = $attraction['coord'];
	$description = $attraction['description'];
	$rating = $attraction['rating'];
	$photo = $attraction['photo'];

	$mysql->close();
?>