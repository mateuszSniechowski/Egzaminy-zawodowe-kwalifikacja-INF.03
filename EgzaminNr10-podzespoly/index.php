<?php
	$host = "localhost";
	$user = "root";
	$passwd = "";
	$db_name = "sklepKomputerowy";
?>

<html lang="pl">
<head>

	<meta charest="UTF-8">
	<link href="styl8.css" rel="stylesheet">
	<title>Nasz sklep komputerowy</title>
	
</head>
<body>

	<div class="blok-gorny">
	
		<div class="menu">
			<ul> 
				<li><a href="index.php">Główna</a></li>
				<li><a href="procesory.html">Procesory</a></li>
				<li><a href="ram.html">RAM</a></li>
				<li><a href="grafika.html">Grafika</a></li>
			</ul>
		</div>
		
		<div class="logo">
			<h2>Podzespoły komputerowe</h2>
		</div>
		
	</div>
	
	<div class="blok-glowny">
		<h1>Dzisiejsze promocje</h1>
		
		<table>
			<tr>
				<th>NUMER</th>
				<th>NAZWA PODZESPOŁU</th>
				<th>OPIS</th>
				<th>CENA</th>
			</tr>
		
			<?php 
				$connect = mysqli_connect($host, $user, $passwd, $db_name) or
					die("ERROR: ".mysqli_error());
					
				$sql = "SELECT id, nazwa, opis, cena FROM podzespoly WHERE cena < 1000";
				$result = mysqli_query($connect, $sql);
				while($row = mysqli_fetch_array($result)){
					$id = $row[0];
					$nazwa = $row[1];
					$opis = $row[2];
					$cena = $row[3];
					
					echo("
					<tr>
						<td>$id</td>
						<td>$nazwa</td>
						<td>$opis</td>
						<td style='text-align: right;'>$cena</td>
					</tr>
					");
				}
				$connect -> close();
			?>
		</table>
	</div>
	
	<div class="stopki">
		<footer>
			<img src="scalak.jpg" alt="promocje na procesory">
		</footer>
		
		<footer> 
			<h4>Nasz Sklep Komputerowy</h4>
			<p>
				Współpracujemy z hurtownią 
				<a href="http://www.edata.pl/" target="_blank">edata</a>
			</p>
		</footer>
		
		<footer>
			<p>zadzwoń: 601 602 603</p>
		</footer>
		
		<footer>
			<p>Stronę wykonał: PESEL</p>
		</footer>
	</div>
</body>
</html>