<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h2>Original paragraph</h2>
	<?php
	// Prende i dati del form
	$paragrafo = $_POST['paragraph'];
	$parola_censurata = $_POST['word'];

	// Stampa il paragrafo e la sua lunghezza
	echo "<p>Paragrafo originale:</p>";
	echo "<p>" . $paragrafo . "</p>";
	echo "<p>Lunghezza del paragrafo: " . strlen($paragrafo) . "</p>";

    ?>

    <h2>Censured paragraph</h2>
    <?php
	// Censura la parola nel paragrafo
	$paragrafo_censurato = str_ireplace($parola_censurata, '***', $paragrafo);

	// Stampa il paragrafo censurato e la sua lunghezza
	echo "<p>Paragrafo censurato:</p>";
	echo "<p>" . $paragrafo_censurato . "</p>";
	echo "<p>Lunghezza del paragrafo censurato: " . strlen($paragrafo_censurato) . "</p>";
	?>
    
</body>
</html>