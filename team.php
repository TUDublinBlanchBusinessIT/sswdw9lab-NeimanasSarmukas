<?php

class Team {

    private $teamName;
    private $totalPoints = 0;
    private $totalGoals = 0;
    private $totalGames = 0;

 
    public function __construct($teamName) {
        $this->teamName = $teamName;
    }


    public function finalScore($homeScore, $opposingScore) {
        $this->totalGames += 1;

        $this->totalGoals += $homeScore;

        if ($homeScore > $opposingScore) {
            $this->totalPoints += 3;
        } elseif ($homeScore == $opposingScore) {
            $this->totalPoints += 1;
        }
    }

    public function getTeamName() {
        return $this->teamName;
    }

    public function getTotalPoints() {
        return $this->totalPoints;
    }

    public function getTotalGoals() {
        return $this->totalGoals;
    }

    public function getTotalGames() {
        return $this->totalGames;
    }
}

?>
