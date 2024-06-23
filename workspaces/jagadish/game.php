<?PHP
//$dbhost = 'localhost';
$dbhost = 'az1-ss39.a2hosting.com';
$dbuser = 'rhsgirls_dhriti';
$dbpass = '3F9a0WuoXcHpT0Blt';
$dbschema = 'rhsgirls_ProductionDB';
$connection = new mysqli($dbhost,$dbuser,$dbpass);
if ($connection->connect_error){
	die("Connection to database failed: " . $connection->connect_error);
}
?>

<html>
	<head>
		<title>Trivia Quiz</title>
	</head>
	<body>
    <form action="/game.php" method="post">
        <input id="game_action" name="game_action" type="hidden" value="ANSWER" />
        <ul>
        <?php

		try {
			$sqlQuery = 'SELECT * FROM rhsgirls_ProductionDB.quiz_questions';
			$result = $connection->query($sqlQuery);
			//yours
			if ($result->num_rows > 0){
				while($row = $result->fetch_assoc()){
					echo("<li>".$row["text"]."</li>");
				}
			}
		}
		catch (exception $e) {
			echo("bad things happened: "+$e);
		}
		//finally {
		//	//optional code that always runs
		//}
        ?>
        </ul>
		<input type="submit" value="guess" />
    </form>
 </body>
 </html>
 






