<!DOCTYPE html>
<html lang="pl">
	<head>
		<title>Kiedy wstać?</title>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="stylesheet.css">
	</head>
	<body>
	<div class="container-fluid">
		<?php
		echo "Mamy aktualnie ".date('H:i');
		echo " dnia ".date('d.m.Y');
		echo "r.<br>";
		if(isset($_POST['teraz'])&&($_POST['teraz']=="Idę spać teraz!")) 
		{
			$date = new DateTime(); 
			$date2 = new DateTime();
			$date3 = new DateTime();
			$date -> modify('+9 hour + 14 minutes');
			$date2 -> modify('+7 hour  + 44 minutes');
			$date3 -> modify('+6 hour + 14 minutes');
			echo "Jeżeli położysz się teraz spać najlepiej ustaw budzik na <b>".$date->format('H:i');
			echo "</b> albo <b>".$date2->format('H:i');
			echo "</b> albo <b>".$date3->format('H:i');
			echo "</b><br>Został uwzględniony czas potrzebny na zaśnięcie przeciętnemu człowiekowi czyli 14 minut.";
		}
		else
		{
			 ?>   
		<form action="kiedy_wstac.php" method="post">
			Kiedy idziesz spać?<br><br>
			<input type="submit" name="teraz" value="Idę spać teraz!"/>
		</form>
	</div>
		<?php
		}
		?>
		<div class="container">
		<br><br><button type="button" class="btn btn-dark"><a href="index.php">Wróć do strony głównej!</a></button>
		</div>
			<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>