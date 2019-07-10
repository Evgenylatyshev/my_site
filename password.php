<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<script>
var letters = ["q", "w", "e", "1", "2", "3"];

function readInt(){
	return +document.getElementById("userAnswer").value;
}

function write(text){
	document.getElementById("passw").innerHTML = text;
}

function getRandomNumber(max){
	return Math.round(Math.random() * max);
}

function generateText(letters, length){
	var text = "";
	for (var i = 0; i < length; i++){
	var n = getRandomNumber(letters, length);
	text = text + letters[n];
	}

	return text;
}

function generate(){
	var length = readInt();
	var passw = generateText(letters, length);
	write(passw);
}

</script>

<div class="content">
<?php
	include "menu.php";
?>

	<h1>Генератор случайных паролей</h1>

	<div class="center">
		<div class="box_text">
			<p>Введите длину пароля</p>
            <input type="text" id="userAnswer">
            <h3 id="passw"></h3>
            <a href="#" onClick="generate();">Генерировать</a>
		</div>
	</div>
</div>	
<div class="footer">
Copyright &copy; <?php echo date("Y");?> Evgeniy Latyshev
</div>


</body>
</html>