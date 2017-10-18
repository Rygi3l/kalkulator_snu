<!DOCTYPE html>
<html lang="pl">
<head>
<title>Kiedy spać?</title>
<meta charset="utf-8"/>
</head>
<body>
	<?php
	echo "Mamy aktualnie ".date('H:i');
	echo " dnia ".date('d.m.Y');
	echo "r.<br>";
    if(isset($_POST['oblicz'])&&($_POST['teraz']=="oblicz"))
    {
		$godzina = @$_POST['godzina'];
		$minuta = @$_POST['minuta'];
		$pora_dnia = @$_POST['pora_dnia'];
		$oblicz = @$_POST['oblicz'];
		$teraz = @$_POST['teraz'];
    }
    else
    {
         ?>   
    <form action="kiedy_spac.php" method="post">
		<p>Kiedy idziesz spać?<br>
		<select name="godzina">
			<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
			<option>6</option>
			<option>7</option>
			<option>8</option>
			<option>9</option>
			<option>10</option>
			<option>11</option>
			<option>12</option>
		</select>:<select name="minuta">
			<option>05</option>
			<option>10</option>
			<option>15</option>
			<option>20</option>
			<option>25</option>
			<option>30</option>
			<option>35</option>
			<option>40</option>
			<option>45</option>
			<option>50</option>
			<option>55</option>
		</select>
		<select name="pora_dnia">
			<option>AM</option>
			<option>PM</option>
		</select>
		<input type="submit" name="oblicz" value="Oblicz!"/></p>
	</form>
    <?php
    }
    ?>
</body>
</html>







