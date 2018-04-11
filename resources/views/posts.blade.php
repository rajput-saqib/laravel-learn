<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts List</title>
</head>
<body>


	<?
		foreach ($posts as $key => $value) {
			echo '<a href="post/'.$value->id.'">';
			
			echo '<h1>'.$value->title .'</h1>';
			echo '<p>'.$value->body .'</p>';
			echo '</a>';
		}
	?>

</body>
</html>