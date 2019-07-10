<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" href="style.css">
	
</head>
<body>

<div class="content">
<?php
include "menu.php";
?>

<div class="contentWrap">
	<div class="content">
		<div class="center">

			<h1>Игра в загадки</h1>

			<div class="box">

				<?php

					if(isset($_GET['userAnswer1']) && isset($_GET['userAnswer2']) && isset($_GET['userAnswer3'])){

						$userAnswer = $_GET["userAnswer1"];
						$score = 0;
						if($userAnswer == "Дорожной" || $userAnswer == "дорожной"){
							$score++;
						}

						$userAnswer = $_GET["userAnswer2"];
						if($userAnswer == "Стонет" || $userAnswer == "стонет"){
							$score++;
						}

						$userAnswer = $_GET["userAnswer3"];
						if($userAnswer == "Разговор" || $userAnswer == "разговор"){
							$score++;
						}

						echo "Вы угадала " . $score . " загадок";
					}	

				?>

				<form method="GET">
					<p>Какой пробкой нельзя заткнуть ни одну бутылку?</p>
					<input type="text" name="userAnswer1">

					<p>В каком слове «нет» употребляется 100 раз?</p>
					<input type="text" name="userAnswer2">

					<p>Завязать можно, а развязать нельзя. Что это?</p>
					<input type="text" name="userAnswer3">

					<br>
					<input type="submit" value="Ответить" name="">
				</form>

			</div>

		</div>
	</div>
</div>	

	

</div>	
<div class="footer">
	Copyright &copy; <?php echo date("Y");?> Evgeniy Latyshev
</div>


</body>
</html>