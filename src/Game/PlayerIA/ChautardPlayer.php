<?php

namespace Hackathon\PlayerIA;
use Hackathon\Game\Result;

/**
 * Class ChautardPlayer
 * @package Hackathon\PlayerIA
 * @author Robin
 *
 */
class ChautardPlayer extends Player
{
    protected $mySide;
    protected $opponentSide;
    protected $result;

    public function getChoice()
    {
        $nb = $this->result->getNbRound();

        $score = $this->result->getStatsFor($this->opponentSide)["score"];
        $my_score = $this->result->getStatsFor($this->mySide)["score"];

        $last_score = $this->result->getLastScoreFor($this->opponentSide);
        
        $last_sci = $this->result->getStatsFor($this->opponentSide)["scissors"];
        $last_roc = $this->result->getStatsFor($this->opponentSide)["rock"];
        $last_pap = $this->result->getStatsFor($this->opponentSide)["paper"];

        if ($last_score > 1 && $nb > 2)
        {
            $last_choice = $this->result->getLastChoiceFor($this->opponentSide);
            $last_choice_1 = $this->result->getChoicesFor($this->opponentSide)[sizeof($this->result->getChoicesFor($this->opponentSide)) - 2];

            if ($last_choice == $last_choice_1)
            {
                if ($last_choice == "scissors")
                {
                    return parent::rockChoice();
                }
                if ($last_choice == "paper")
                {
                    return parent::scissorsChoice();
                }
                else
                {
                    return parent::paperChoice();
                }
            }
            else
            {
            if ($last_pap > $last_roc && $last_pap > $last_sci)
                    return parent::scissorsChoice();
                if ($last_sci > $last_roc && $last_sci > $last_pap)
                    return parent::rockChoice();

                return parent::paperChoice();
            }
        }
        else
        {
            if ($last_pap > $last_roc && $last_pap > $last_sci)
                return parent::scissorsChoice();
            if ($last_sci > $last_roc && $last_sci > $last_pap)
                return parent::rockChoice();

            return parent::paperChoice();
        }

        return parent::paperChoice();
        // -------------------------------------    -----------------------------------------------------
        // How to get my Last Choice           ?    $this->result->getLastChoiceFor($this->mySide) -- if 0 (first round)
        // How to get the opponent Last Choice ?    $this->result->getLastChoiceFor($this->opponentSide) -- if 0 (first round)
        // -------------------------------------    -----------------------------------------------------
        // How to get my Last Score            ?    $this->result->getLastScoreFor($this->mySide) -- if 0 (first round)
        // How to get the opponent Last Score  ?    $this->result->getLastScoreFor($this->opponentSide) -- if 0 (first round)
        // -------------------------------------    -----------------------------------------------------
        // How to get all the Choices          ?    $this->result->getChoicesFor($this->mySide)
        // How to get the opponent Last Choice ?    $this->result->getChoicesFor($this->opponentSide)
        // -------------------------------------    -----------------------------------------------------
        // How to get my Last Score            ?    $this->result->getLastScoreFor($this->mySide)
        // How to get the opponent Last Score  ?    $this->result->getLastScoreFor($this->opponentSide)
        // -------------------------------------    -----------------------------------------------------
        // How to get the stats                ?    $this->result->getStats()
        // How to get the stats for me         ?    $this->result->getStatsFor($this->mySide)
        //          array('name' => value, 'score' => value, 'friend' => value, 'foe' => value
        // How to get the stats for the oppo   ?    $this->result->getStatsFor($this->opponentSide)
        //          array('name' => value, 'score' => value, 'friend' => value, 'foe' => value
        // -------------------------------------    -----------------------------------------------------
        // How to get the number of round      ?    $this->result->getNbRound()
        // -------------------------------------    -----------------------------------------------------
        // How can i display the result of each round ? $this->prettyDisplay()
        // -------------------------------------    -----------------------------------------------------
    }
};