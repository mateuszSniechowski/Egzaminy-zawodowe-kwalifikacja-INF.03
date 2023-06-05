<?php 
	$host = "localhost";
	$user = "root";
	$passwd = "";
	$db_name = "bazaGrzybow"
?>

<html lang="lp">
<head>

	<meta charest="UTF-8">
	<title>Grzybobranie</title>
	<link href="styl.css" rel="stylesheet">
	
</head>
<body>

	<div class="blok-gorny">
		
		<div class="blok-tytulowy">
			<h1 class="title-h">Czas Na Grzyby!</h1>
		</div>
		
		<div class="blok-miniatury">
			<a href="http://localhost/grzyby/podgrzybek.jpg">
				<img src="/grzyby/podgrzybek-miniatura.jpg" alt="grzybobranie">
			</a>
		</div>
		
	</div>
	
	<div class="blok-content">
	
		<div class="blok-lewy">
			<h3>Grzyby jadalne</h3>
			
			<?php 
				$connect = mysqli_connect($host, $user,$passwd, $db_name)
					or die("ERROR: ".mysqli_error());
					
				$sql ="SELECT id, nazwa, potoczna FROM grzyby WHERE jadalny = 1";
				$result = mysqli_query($connect, $sql);
				
				while($row = mysqli_fetch_array($result)){
					$id = $row[0];
					$nazwa = $row[1];
					$potoczna = $row[2];
					
					echo("<p class='lista-blok-lewy'>
							$id. $nazwa ($potoczna)
						</p>");
				}
			?>
			
			<h3>Polecamy do zup</h3>
			
			<ul>
				<?php 
					$sql = "
						SELECT grzyby.potoczna, rodzina.nazwa FROM grzyby 
						JOIN potrawy ON grzyby.potrawy_id = potrawy.id
						JOIN rodzina ON grzyby.rodzina_id = rodzina.id
						WHERE potrawy_id = 4";
					$resultV2 = mysqli_query($connect, $sql);
					
					while($rowV2 = mysqli_fetch_array($resultV2)){
						$potoczna = $rowV2[0];
						$rodzina = $rowV2[1];
						
						echo("<li> 
								$potoczna, rodzina: $rodzina
							</li>");
					}
				?>
			</ul>
		</div>
		
		<div class="blok-prawy">
		
			<?php 
				$sqlV3 = "SELECT nazwa_pliku, nazwa FROM grzyby";
				$resultV3 = mysqli_query($connect, $sqlV3);
				
				while($rowV3 = mysqli_fetch_array($resultV3)){
						$nazwa_pliku = $rowV3[0];
						$nazwa = $rowV3[1];
						
						echo("
							<img style='width: 300px; height: 200px;' 
							src='/grzyby/$nazwa_pliku' title='$nazwa'>
						");
				}
				$connect -> close();
			?>
		</div>
	
	</div>
	
	<footer>
		<p>Autor: 0000000000</p>
	</footer>
</body>
</html>
