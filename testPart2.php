<?php


include 'team.php';


$team = new Team("The Tigers");


$team->finalScore(5, 1);  
$team->finalScore(3, 3);  
$team->finalScore(1, 1); 

// Display the results
echo "Goal Average: " . $team->getGoalAverage()

?>