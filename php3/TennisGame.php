<?php
/**
 * Created by PhpStorm.
 * User: dungduong
 * Date: 10/27/2018
 * Time: 6:20 PM
 */

class TennisGame
{
    public $score = '';

    public function getScore($playerScoreOne, $playerScoreTwo)
    {
        $tempScore=0;

        if ($playerScoreOne==$playerScoreTwo) {
            switch ($playerScoreOne)
            {
                case 0:
                    $this->score = "Love-All";
                    break;
                case 1:
                    $this->score = "Fifteen-All";
                    break;
                case 2:
                    $this->score = "Thirty-All";
                    break;
                case 3:
                    $this->score = "Forty-All";
                    break;
                default:
                    $this->score = "Deuce";
                    break;

            }
        }
        else if ($playerScoreOne>=4 || $playerScoreTwo>=4)
        {
            $minusResult = $playerScoreOne-$playerScoreTwo;
            if ($minusResult==1) $this->score ="Advantage player1";
            else if ($minusResult ==-1) $this->score ="Advantage player2";
            else if ($minusResult>=2) $this->score = "Win for player1";
            else $this->score ="Win for player2";
        }
        else
        {
            for ($i=1; $i<3; $i++)
            {
                if ($i==1)
                {
                    $tempScore = $playerScoreOne;

                }else {
                    $this->score.="-";
                    $tempScore = $playerScoreTwo;
                }

                switch($tempScore)
                {
                    case 0:
                        $this->score.="Love";
                        break;
                    case 1:
                        $this->score.="Fifteen";
                        break;
                    case 2:
                        $this->score.="Thirty";
                        break;
                    case 3:
                        $this->score.="Forty";
                        break;
                }
            }
        }
    }

    public function __toString()
    {
        return $this->score;
    }
}