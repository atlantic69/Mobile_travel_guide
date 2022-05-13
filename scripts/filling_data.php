<!---->
<?php
	$mysql = new mysqli('MP', 'mysql', '', 'mop');
	$result = $mysql->query("SELECT * FROM `dost` WHERE `added_on_map` IS NOT NULL");

	$response = array();
	$posts = array();

	while ($row = $result->fetch_assoc()) {
   	$id = $row['id'];
		$coord = explode(", ", $row['coord']);
		$title = $row['title'];
		$photo = $row['photo'];
		$description = $row['description'];
		$address = $row['address'];
		$author = $row['author'];
		$rating = $row['rating'];

		$posts[] = array('type'=>'Feature', 'id'=> $id, 'geometry'=>['type'=>'Point', 'coordinates'=> [$coord[0], $coord[1]]],
			'properties'=> ['balloonContentHeader'=> "<font size=3><b>$title</b></font>",
			'balloonContentBody'=> ["<img src='/img_dost/$photo' height='180' widht= '240'><br>
			<font size=2> $description </font><br>
			<b>$address</b>"],
			'balloonContentFooter'=> "Достопримечательность добавлена: <strong>$author</strong>",
			'hintContent'=> "<b>$title</b><br>Рейтинг: $rating"]);
	}

	$response = array('type'=> 'FeatureCollection', 'features'=>$posts);

	$fp = fopen('scripts/data.json', 'w');
	fwrite($fp, json_encode($response, JSON_UNESCAPED_UNICODE));
	fclose($fp);

	$mysql->close();

	//header('Location: /');

?>