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
        $nb = $this->result->getNbRound();
        
        if ($nb % 10 == 0)
            return parent::rockChoice();

        if ($nb % 9 == 0)
            return parent::rockChoice();
        
        if ($nb % 8 == 0)
            return parent::scissorsChoice();

        if ($nb % 7 == 0)
            return parent::scissorsChoice();
        
        if ($nb % 6 == 0)
            return parent::paperChoice();
        
        if ($nb % 5 == 0)
            return parent::rockChoice();
        
        if ($nb % 4 == 0)
            return parent::paperChoice();
        
        if ($nb % 3 == 0)
            return parent::rockChoice();
        
        if ($nb % 2 == 0)
            return parent::scissorsChoice();

        return parent::scissorsChoice();
    }
};