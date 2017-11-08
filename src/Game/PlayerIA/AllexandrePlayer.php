<?php

namespace Hackathon\PlayerIA;
use Hackathon\Game\Result;

/**
 * Class AllexandrePlayer
 * @package Hackathon\PlayerIA
 * @author Robin
 *
 */
class AllexandrePlayer extends Player
{
    protected $mySide;
    protected $opponentSide;
    protected $result;
    protected $oponent_last_5 = array();
    protected $nb_last = 3;
    
    function __construct() {
        for ($i = 0; $i <= pow(3, $this->nb_last); $i++) {
            $this->oponent_last_5[$i] = 0;
        }
    }

    public function getChoice()
    {
        /*
        $nb_last = $this->nb_last;
        $graph = array();

        for ($i = 0; $i <= $nb_last - 1; $i++)
        {
            $graph[$i] = 0;
        }

        if ($this->result->getNbRound() > $nb_last - 1)
        {
            for ($i = 0; $i <= $nb_last - 1; $i++)
            {
                $graph[$i] = $this->result->getChoicesFor($this->opponentSide)[sizeof($this->result->getChoicesFor($this->opponentSide)) - $nb_last + $i];
            }
        }
        else
        {
            return parent::scissorsChoice();
        }

        $r = 0;
        $rMinus1 = 0;
        for ($i = 0; $i <= sizeof($graph) - 1; $i++)
        {
            if ($graph[sizeof($graph) - $i - 1] == "scissors")
            {
                $r = $r + pow(3, $i);
                if ($i > 0)
                {
                    $rMinus1 = $rMinus1 + pow(3, $i);
                }
            }
        }

        $this->oponent_last_5[$r] = $this->oponent_last_5[$r] + 1;

        $percentage = 0;

        var_dump($r);

        if ($r % 3 == 0) // last was foe
        {
            $percentage = $this->oponent_last_5[$r + 1] - $this->oponent_last_5[$r];
            if ($percentage <= -0.75 && $this->result->getNbRound() % 3 != 0)
            {
                var_dump(1);
                return parent::rockChoice();
            }
            else
            {
                var_dump(2);
                return parent::rockChoice();
            }
        }
        if ($r % 3 == 1) // last was foe
        {
            $percentage = $this->oponent_last_5[$r + 1] - $this->oponent_last_5[$r];
            if ($percentage <= -0.75 && $this->result->getNbRound() % 3 != 0)
            {
                var_dump(3);
                return parent::rockChoice();
            }
            else
            {
                var_dump(4);
                return parent::rockChoice();
            }
        }
        else // last was friend
        {
            $percentage = $this->oponent_last_5[$r] - $this->oponent_last_5[$r - 1];
            if ($percentage <= -0.75 && $this->result->getNbRound() % 3 != 0)
            {
                var_dump(5);
                return parent::rockChoice();
            }
            else
            {
                var_dump(6);
                return parent::rockChoice();
            }
        } 

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
        */
        $choice = parent::scissorsChoice();

        return $choice;
    }
};