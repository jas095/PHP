<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Control Structures</title>

</head>
<body class="bg-dark">
	
	<section>

			<div class="container-fluid bg-primary text-white">
				<div class="container">
					<h1> Estructura de control (if-else) </h1>
				</div>
			</div> 
			<!--Código PHP -->
			<?php /* Control Structures */

				echo '<div class="container-fluid text-white"> <h2>Simulación de lanzar dos dados:</h2>';
					$roll1 = rand(1, 6);
					$roll2 = rand(1, 6);
					echo '<p>Usted ha lanzado - Primer Dado: ' . $roll1 . '. Segundo dado: ' . $roll2 . '</p>';
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

			<div class="container-fluid bg-info text-white">
				<div class="container">
					<h1>Estructura de control - For loop </h1>
				</div>
			</div> 
			<!--Código PHP -->
			<?php /* Control Structures */

				echo '<div class="container-fluid text-white"> <h2>Simulación de lanzar un dado:</h2>';
					/*Lanzar el dado 6 veces*/
					for ($i=1; $i <= 6; $i++) { 
						$roll = rand(1, 6);
						echo $i.'. Usted ha lanzado ' . $roll. ' ';
						if ($roll == 6) {
						echo '<p>Felicidades has ganado!</p>';
						}else {
						echo 'Lo siento, usted no ha ganado, mejor suerte para la próxima!<br>';
						}
						
					}
					echo 'Gracias por participar.';//This line always printed
				echo '</div>';
			 ?>
	</section>

	<section>

			<div class="container-fluid bg-info text-white">
				<div class="container">
					<h1>Estructura de control - While loop </h1>
				</div>
			</div> 
			<!--Código PHP -->
			<?php /* Control Structures */

				echo '<div class="container-fluid text-white"> <h2>Simulación de lanzar un dado:</h2>';
					/*Lanzar el dado hasta que sea igual 6 */
					$roll = 0; $count = 0;
					while ($roll != 6) {
					 	 
						$roll = rand(1, 6);
						echo $count.'. Usted ha lanzado ' . $roll. ' ';
						if ($roll == 6) {
						echo '<p>Felicidades has ganado!</p>';
						}else {
						echo 'Lo siento, usted no ha ganado, mejor suerte para la próxima!<br>';
						}
					$count++;	
					}
					echo 'Gracias por participar.';//This line always printed
				echo '</div>';
			 ?>
	</section>

	<section>

			<div class="container-fluid bg-info text-white">
				<div class="container">
					<h1>Estructura de control - do-While loop </h1>
				</div>
			</div> 
			<!--Código PHP -->
			<?php /* Control Structures */

				echo '<div class="container-fluid text-white"> <h2>Simulación de lanzar un dado:</h2>';
					/*Lanzar el dado hasta que sea igual 6 */
					$count = 0;
					do{
					 	 
						$roll = rand(1, 6);
						echo $count.'. Usted ha lanzado ' . $roll. ' ';
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

</body>
</html>