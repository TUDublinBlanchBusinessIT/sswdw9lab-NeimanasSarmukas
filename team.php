<?php

class Team
{
    private $teamName;
    private $totalPoints = 0;
    private $totalGoals = 0;
    private $totalGames = 0;

    public function __construct($teamName)
    {
        $this->teamName = $teamName;
        $this->totalPoints = 0;
        $this->totalGames = 0;
        $this->totalGoals = 0;
    }

    public function finalScore($homeScore, $opposingScore)
    {
        $this->totalGames += 1;
        $this->totalGoals += $homeScore;

        if ($homeScore > $opposingScore)
        {
            $this->totalPoints += 3;
        }
        elseif ($homeScore == $opposingScore)
        {
            $this->totalPoints += 1;
        }
    }

    public function getGoalAverage()
    {
        if ($this->totalGames === 0)
        {
            return 0;
        }
        return $this->totalGoals / $this->totalGames;
    }
}

?>
