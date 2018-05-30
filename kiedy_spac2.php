<!DOCTYPE html>
<html lang="pl">
	<head>
		<title>Kiedy spać?</title>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="stylesheet.css">
	</head>
	<body>
	<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
		<?php
		echo "Mamy aktualnie ".date('H:i');
		echo " dnia ".date('d.m.Y');
		echo "r.<br>";
		if(isset($_POST['oblicz'])&&($_POST['oblicz']=="Oblicz!"))
		{
			$godzina = $_POST['godzina'];
			$minuta = $_POST['minuta'];
			//$pora_dnia = $_POST['pora_dnia']; - do pozniejszej implementacji
			$oblicz = $_POST['oblicz'];

			$dateSrc = "2017-10-20 $godzina:$minuta GMT";
			$data = new DateTime($dateSrc);
			$data2 = new DateTime($dateSrc);
			$data3 = new DateTime($dateSrc);
			$data -> modify('-9 hour');
			$data2 -> modify('-7 hour  - 30 minutes');
			$data3 -> modify('-6 hour');
			echo "Chcesz wstać o ".$godzina.":".$minuta." więc powinieneś zasnąć o <b>".$data3->format('H:i A')."</b> albo o <b>".$data2->format('H:i A')."</b> albo o <b>".$data->format('H:i A')."</b>.<br>Uwzględnij to, że przeciętnemu człowiekowi potrzeba 14 minut na zaśnięcie. Powyższe godziny dotyczą snu a nie położenia się do łóżka.";
		}
		else
		{
			 ?> 
		</div>
	</div>	
		<div class="row">
			<div class="col-sm-12">
		<form action="kiedy_spac2.php" method="post">
			Kiedy chcesz wstać?<br><br>
			</div>
			</div>
			<div class="row justify-content-around">
			<div clas="col-4 align-self-center">
			<select class="form-control" name="godzina">
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
				</select></div>:<div clas="col-4 align-self-center"><select class="form-control" name="minuta">
				<option>00</option>
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
			</div>	
			<!-- <select name="pora_dnia">
				<option>AM</option>
				<option>PM</option> 
			</select>-->
			<div clas="col-4 align-self-center">
			<input type="submit" class="btn btn-dark" name="oblicz" value="Oblicz!"/>
			</div>
			</div>
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