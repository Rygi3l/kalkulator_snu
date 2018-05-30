<!DOCTYPE html>
<html lang="pl">
<head>
	<title>Kalkulator Snu</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="stylesheet.css">
</head>
<body>
	<div class="container-fluid">
		<h1 align="center">Kalkulator Snu.</h1>
	</div>
	<div class="container">
		<p align="center">Człowiek potrzebuje minimum 5-6 kompletnych cykli snu. Jeden cykl trwa około 90 minut u przeciętnego człowieka. Przeciętny czas na zaśnięcie po położeniu się wynosi 14 minut.</p>
			<?php
		if(isset($_POST['teraz'])&&($_POST['teraz']=="Idę spać teraz!"))
		{
			$date = new DateTime(); // date at this moment
			$date2 = new DateTime();
			$date3 = new DateTime();
			$date -> modify('+9 hour + 14 minutes'); // modified date to complete hours (good sleep)
			$date2 -> modify('+7 hour  + 44 minutes');
			$date3 -> modify('+6 hour + 14 minutes');
			echo "Jeżeli położysz się teraz spać najlepiej ustaw budzik na <b>".$date->format('H:i');
			echo "</b> albo <b>".$date2->format('H:i'); // set format to display time
			echo "</b> albo <b>".$date3->format('H:i');
			echo "</b><br>Został uwzględniony czas potrzebny na zaśnięcie przeciętnemu człowiekowi czyli 14 minut.";
		}
		else
		{
			 ?>   
		<form action="kiedy_wstac.php" method="post">
			<input type="submit" class="btn btn-dark" name="teraz" value="Idę spać teraz!"/>
		</form>
		<?php
		}
		?>
		<br>
		<button type="button" class="btn btn-dark"><a href="kiedy_spac.php">O, której mam wstać?</a></button> 
		<button type="button" class="btn btn-dark"><a href="kiedy_spac2.php">O, której mam pójść spać?</a></button>
	</div>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>