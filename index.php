<?php
require_once 'function.php';

if($_POST['name']){
	$name = $_POST['name'];
	$text = $_POST['text'];
	setmes($name, $text);
	header ("Location: {$_SERVER['PHP_SELF']}");
}

$mes = getmes();

?>


<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">  
		<title>Гостевая книга</title>
		<link rel="stylesheet" href="css/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="css/styles.css">
	</head>
	<body>
		<div id="wrapper">
			<h1>Гостевая книга</h1>
			<?php foreach($mes as $m):?>
				<div class="note">
					<p>
						<span class="date"><?= $m['data']?></span>
						<span class="name"><?= $m['name']?></span>
					</p>
					<p>
					<?= $m['text']?>
					</p>
				</div>
			<?php endforeach?>	
			<?php if(!empty($mes)): ?>	
				<div class="info alert alert-info">
				
					Запись успешно сохранена!
				</div>
			<?php endif ?>
			<div id="form">
				<form action="#form" method="POST">
					<p><input class="form-control" name="name" placeholder="Ваше имя"></p>
					<p><textarea class="form-control" name="text" placeholder="Ваш отзыв"></textarea></p>
					<p><input type="submit" class="btn btn-info btn-block" value="Сохранить"></p>
				</form>
			</div>
		</div>
	</body>
</html>

