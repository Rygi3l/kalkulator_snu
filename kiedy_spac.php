<!DOCTYPE html>
<html lang="pl">
<head>
<title>Kiedy spać?</title>
<meta charset="utf-8"/>
<link rel="stylesheet" href="stylesheet.css">
</head>
<body>
	<?php
	echo "Mamy aktualnie ".date('H:i'); // aktualna data i godzina
	echo " dnia ".date('d.m.Y');
	echo "r.<br>";
    if(isset($_POST['oblicz'])&&($_POST['oblicz']=="Oblicz!")) // zabezpieczenie - jesli przycisk jest wcisniety to wykonaj php jesli nie, pokaz formularz
    {
		$godzina = $_POST['godzina'];
		$minuta = $_POST['minuta'];
		//$pora_dnia = $_POST['pora_dnia'];
		$oblicz = $_POST['oblicz'];
		
		$dateSrc = "2017-10-20 $godzina:$minuta GMT"; // wpisanie godziny i minuty wybranej przez usera do zmiennej
		$data = new DateTime($dateSrc); // uzycie zmiennej z godzina usera
		$data2 = new DateTime($dateSrc);
		$data3 = new DateTime($dateSrc);
		$data -> modify('+9 hour + 14 minutes'); // modyfikacja podanej godziny o prawidlowa liczbe cykli snu
		$data2 -> modify('+7 hour  + 44 minutes');
		$data3 -> modify('+6 hour + 14 minutes');
		echo "Chcesz iść spać o ".$godzina.":".$minuta." więc powinieneś wstać o <b>".$data3->format('H:i A')."</b> albo o <b>".$data2->format('H:i A')."</b> albo o <b>".$data->format('H:i A')."</b>.";
    }
    else
    {
         ?>   
    <form action="kiedy_spac.php" method="post">
		Kiedy idziesz spać?<br><br>
		<select name="godzina">
			<option>01</option>
			<option>02</option>
			<option>03</option>
			<option>04</option>
			<option>05</option>
			<option>06</option>
			<option>07</option>
			<option>08</option>
			<option>09</option>
			<option>10</option>
			<option>11</option>
			<option>12</option>
			<option>13</option>
			<option>14</option>
			<option>15</option>
			<option>16</option>
			<option>17</option>
			<option>18</option>
			<option>19</option>
			<option>20</option>
			<option>21</option>
			<option>22</option>
			<option>23</option>
			<option>24</option>
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
		<!-- <select name="pora_dnia">
			<option>AM</option>
			<option>PM</option> 
		</select>-->
		<input type="submit" name="oblicz" value="Oblicz!"/></p>
	</form>
    <?php
    }
    ?>
	<p><a href="index.php">Wróć do strony głównej.</a></p>
</body>
</html>