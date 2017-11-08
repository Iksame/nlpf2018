<?php

namespace Hackathon\PlayerIA;
use Hackathon\Game\Result;

/**
 * Class CrepinPlayer
 * @package Hackathon\PlayerIA
 * @author Robin
 *
 */
class CrepinPlayer extends Player
{
    protected $mySide;
    protected $opponentSide;
    protected $result;

    public function getChoice()
    {
        $nb = $this->result->getNbRound();

        $last_sci = $this->result->getStatsFor($this->opponentSide)["scissors"];
        $last_roc = $this->result->getStatsFor($this->opponentSide)["rock"];
        $last_pap = $this->result->getStatsFor($this->opponentSide)["paper"];

        if ($last_pap > $last_roc && $last_pap > $last_sci)
            return parent::scissorsChoice();
        if ($last_sci > $last_roc && $last_sci > $last_pap)
            return parent::rockChoice();

        return parent::paperChoice();
    }
};