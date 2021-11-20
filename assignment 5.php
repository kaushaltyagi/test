<!DOCTYPE html>

<html>

<head>
	<meta charset="utf-8">

    <title>Start</title>

</head>
<body>

<?php 

session_start();

$_SESSION['counter']=0;
		if ($_SESSION['counter']==0)
			$_SESSION['randomNumber'] = rand(1,10) ;
			echo $_SESSION['randomNumber'];
		
	?>
	<form method="POST" action="Guess.php">
		<input type="text" name="guess" placeholder="Guess a number" ><br>
		<input type="submit" name="submit" value="guess">
	</form>

</body>

</html>