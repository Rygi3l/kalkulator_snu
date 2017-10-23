<!DOCTYPE html>
<html lang="pl">
<head>
<title>Kiedy wstać?</title>
<meta charset="utf-8"/>
<link rel="stylesheet" href="stylesheet.css">
</head>
<body>
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
		echo "Jeżeli położysz się teraz spać najlepiej ustaw budzik na ".$date->format('H:i');
		echo " albo ".$date2->format('H:i');
		echo " albo ".$date3->format('H:i');
		echo "<br>Został uwzględniony czas potrzebny na zaśnięcie przeciętnemu człowiekowi czyli 14 minut.";
    }
    else
    {
         ?>   
    <form action="kiedy_wstac.php" method="post">
		<p>Kiedy idziesz spać?<br>
		<input type="submit" name="teraz" value="Idę spać teraz!"/>
	</form>
    <?php
    }
    ?>
	<p><a href="index.php">Wróć do strony głównej.</a></p>
</body>
</html>







