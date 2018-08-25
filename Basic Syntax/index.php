<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Basic Syntax</title>

</head>
<body class="bg-dark">
	<header class="bg-primary text-white">
		<div class="container-fluid">
			<div class="container">
				<h1>Lenguaje de programación PHP - Sintaxis básica de php </h1>
			</div>
		</div> 
	</header>
	
	<section>
			<?php /*Variables, Operators, and Comments */
				echo '<div class="container-fluid text-white">';
					echo '<br><br>Esto es una prueba simple de <strong>código en PHP</strong>!';
				 
				 //Variable - Random Number
					$number = rand(1 , 50);
				 	echo '<p>Función Random - Veremos un número aleatorio del <span>1 y 50</span></p>';
				 	echo 'Número aleatorio: ' . $number . '<br><br>';
				echo '</div>';

				echo '<div class="container-fluid text-white">';

					 /*Juego de lanzar el dado*/
					 echo "<h3>Juego lanzar el dado</h3>";
					$roll = rand(1, 6);
					echo '<p>Usted ha lanzado ' . $roll . '</p>';
					if ($roll == 6) {
					echo '<p>Felicidades has ganado!</p>';
					}
					echo '<p>Gracias por jugar</p>';
				echo '</div>';
			 ?>
	</section>

</body>
</html>