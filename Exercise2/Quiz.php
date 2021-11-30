<?php
	$color = $_POST["color"];
	$capital = $_POST["capital"];
	$year = $_POST["Year"];
	$country = $_POST["country"];
	$movie = $_POST["movie"];
	$score = 0;
	
	echo "For question 1: What Mixture of Primary colors create Green?<br>";
	echo "You chose: " . $color . "<br> The correct answer was: Blue and Yellow <br>";
	if($color == "Blue and Yellow")
	{
		$score++;
	}
	echo "<br>";
	echo "For question 2: What is the capital of Spain<br>";
	echo "You chose: " . $capital . "<br> The correct answer was: Madrid?<br>";
	if($capital == "Madrid")
	{
		$score++;
	}
	echo "<br>";
	echo "For question 3: What year did Kansas become a state?<br>";
	echo "You chose: " . $year . "<br> The correct answer was: 1861 <br>";
	if($year == "1861")
	{
		$score++;
	}
	echo "<br>";
	echo "For question 4: How many countries exist in the world? <br>";
	echo "You chose: " . $country . "<br> The correct answer was: 195 <br>";
	if($country == "195")
	{
		$score++;
	}
	echo "<br>";
	echo "For question 5: Which Spider-Man movie comes out this year?<br>";
	echo "You chose: " . $movie . "<br> The correct answer was: Spider-Man: No Way Home <br>";
	if($movie == "Spider-Man-Home")
	{
		$score++;
	}
	echo "<br> You answered a total of " . $score . " correctly. Giving you a " . ($score/5)*100 . "% for the quiz.<br>";

?>