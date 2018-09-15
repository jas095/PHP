<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Arreglos - Arrays</title>

</head>
<body class="bg-dark">
	
	<section>

			<div class="container-fluid bg-info text-white">
				<div class="container">
					<h1>Arreglos - Arrays </h1>
				</div>
			</div> 
			<!--Código PHP -->
			<?php /* Arrays */

				$numbers = [
					1 => 'Uno',
					2 => 'Dos',
					3 => 'Tres',
					4 => 'Cuatro',
					5 => 'Cinco',
					6 => 'Seis'
				];

				/*This is equivalent to:
				$numbers = [];
				$numbers[1] = 'one';
				$numbers[2] = 'two';
				$numbers[3] = 'three';
				$numbers[4] = 'four';
				$numbers[5] = 'five';
				$numbers[6] = 'six';*/

				echo '<div class="container-fluid text-white"> <h2>Simulación de lanzar un dado:</h2>';
					/*Lanzar el dado hasta que sea igual 6 */
					$count = 0;
					do{
					 	 
						$roll = rand(1, 6);
						echo $count.'. Usted ha lanzado el número: ' . $numbers[$roll] . '. ';
						if ($roll == 6) {
						echo '<p>Felicidades has ganado!</p>';
						}else {
						echo 'Lo siento, usted no ha ganado, mejor suerte para la próxima!<br>';
						}
					$count++;	
					}while ($roll != 6);

					echo 'Gracias por participar.';//This line always printed
				echo '</div>';
			 ?>
	</section>

	<section>

			<div class="container-fluid bg-primary text-white">
				<div class="container">
					<h1> Arreglos - Arrays </h1>
				</div>
			</div> 
			<!--Código PHP -->
			<?php /* Arreglos - Arrays */

				echo '<div class="container-fluid text-white"> <h2>Simulación de lanzar dos dados:</h2>';
					$roll1 = rand(1, 6);
					$roll2 = rand(1, 6);
					echo '<p>Usted ha lanzado - Primer Dado: ' . $numbers[$roll1] . '. Segundo dado: ' . $numbers[$roll2] . '</p>';
					if ($roll1 == 6 && $roll2 == 6) {
					echo '<p>Felicidades has ganado!</p>';
					}
					else {
					echo '<p>Lo siento, usted no ha ganado, mejor suerte para la próxima!</p>';
					}
					echo '<p>Gracias por participar.</p>';//This line always printed
				echo '</div>';
			 ?>
	</section>

	<section>

			<div class="container-fluid bg-primary text-white">
				<div class="container">
					<h1> Arreglos asociativo  - Associative array </h1>
				</div>
			</div> 
			<!--Código PHP -->
			<?php /* Arreglos asociativo  - Associative array */

				$birthdays = [
					'José' => '1990-04-18',
					'Licia' => '2000-01-22',
					'Ana' => '2008-04-12',
					'Alessandra' => '2010-08-09'
				];


				echo '<div class="container-fluid text-white"> <h2>Fechas de cumpleaños</h2>';
					echo 'Fechas <br>';
					foreach ($birthdays as $date) {
						echo "$date <br>";
					}
					
					echo "Clave -----Valor <br>";
					foreach ($birthdays as $key => $value) {
						echo "$key => $value <br>";
					}

					print_r($birthdays); //Imprime el arreglo completo.

				echo '</div>';
			 ?>
	</section>
</body>
</html>