<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Fill the form</h1>
	<form method="post" action="censor.php">
		<label for="paragraph">Inserisci il paragrafo:</label><br>
		<textarea id="paragraph" name="paragraph" rows="5" cols="50"></textarea><br>
		<label for="word">Inserisci la parola da censurare:</label><br>
		<input type="text" id="word" name="word"><br><br>
		<input type="submit" value="Invia">
	</form>

    
</body>
</html>