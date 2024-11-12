<?php


include 'team.php';


$team = new Team("The Tigers");


$team->finalScore(5, 1);  
$team->finalScore(3, 3);  
$team->finalScore(1, 1); 

// Display the results
echo "Team Name: " . $team->getTeamName() . PHP_EOL;
echo "Total Points: " . $team->getTotalPoints() . PHP_EOL;
echo "Total Goals: " . $team->getTotalGoals() . PHP_EOL;
echo "Total Games: " . $team->getTotalGames() . PHP_EOL;
echo "Goal Average: " . $team->getGoalAverage() . PHP_EOL;

?>