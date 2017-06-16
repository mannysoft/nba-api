<?php

namespace JasonRoman\NbaApi\Request\Stats;

use Symfony\Component\Validator\Constraint as Assert;
use JasonRoman\NbaApi\Request\Stats\Params\LeagueId;

class VideoStatus extends AbstractStatsApiRequest
{
    /**
     * @LeagueId()
     * @Assert\NotBlank()
     */
    public $leagueId;

    /**
     * @Assert\NotBlank()
     * @Assert\Type("\DateTime")
     */
    public $gameDate;

    /**
     * @return \DateTime
     */
    /*public function getDefaultGameDate()
    {
        return new \DateTime('yesterday');
    }*/
}