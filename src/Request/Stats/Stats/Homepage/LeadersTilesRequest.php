<?php

namespace JasonRoman\NbaApi\Request\Stats\Stats\Homepage;

use JasonRoman\NbaApi\Constraints as ApiAssert;
use JasonRoman\NbaApi\Params\LeagueIdParam;
use JasonRoman\NbaApi\Params\SeasonParam;
use JasonRoman\NbaApi\Params\Stats\GameScopeParam;
use JasonRoman\NbaApi\Params\Stats\PlayerOrTeamParam;
use JasonRoman\NbaApi\Params\Stats\PlayerScopeParam;
use JasonRoman\NbaApi\Params\Stats\SeasonTypeParam;
use JasonRoman\NbaApi\Params\Stats\StatParam;
use JasonRoman\NbaApi\Request\Stats\Stats\AbstractStatsStatsRequest;
use Symfony\Component\Validator\Constraints as Assert;

class LeadersTilesRequest extends AbstractStatsStatsRequest
{
    const ENDPOINT = '/stats/leaderstiles';

    /**
     * @Assert\NotBlank()
     * @Assert\Type("string")
     * @ApiAssert\ApiRegex(LeagueIdParam::FORMAT)
     *
     * @var string
     */
    public $leagueId;

    /**
     * @Assert\NotBlank()
     * @Assert\Type("string")
     * @ApiAssert\ApiRegex(SeasonParam::FORMAT)
     *
     * @var string
     */
    public $season;

    /**
     * @Assert\NotBlank()
     * @Assert\Type("string")
     * @ApiAssert\ApiChoice(SeasonTypeParam::OPTIONS)
     *
     * @var string
     */
    public $seasonType;

    /**
     * @Assert\NotBlank()
     * @Assert\Type("string")
     * @ApiAssert\ApiChoice(StatParam::OPTIONS)
     *
     * @var string
     */
    public $stat;

    /**
     * @Assert\NotBlank()
     * @Assert\Type("string")
     * @ApiAssert\ApiChoice(PlayerOrTeamParam::OPTIONS)
     *
     * @var string
     */
    public $playerOrTeam;

    /**
     * @Assert\NotBlank()
     * @Assert\Type("string")
     * @ApiAssert\ApiChoice(GameScopeParam::OPTIONS)
     *
     * @var string
     */
    public $gameScope;

    /**
     * @Assert\NotBlank()
     * @Assert\Type("string")
     * @ApiAssert\ApiChoice(PlayerScopeParam::OPTIONS)
     *
     * @var string
     */
    public $playerScope;
}