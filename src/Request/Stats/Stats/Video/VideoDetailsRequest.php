<?php

namespace JasonRoman\NbaApi\Request\Stats\Stats\Video;

use JasonRoman\NbaApi\Constraints as ApiAssert;
use JasonRoman\NbaApi\Params\GameIdParam;
use JasonRoman\NbaApi\Params\LeagueIdParam;
use JasonRoman\NbaApi\Params\PlayerIdParam;
use JasonRoman\NbaApi\Params\SeasonParam;
use JasonRoman\NbaApi\Params\Stats\AheadBehindParam;
use JasonRoman\NbaApi\Params\Stats\ClutchTimeParam;
use JasonRoman\NbaApi\Params\Stats\ConferenceParam;
use JasonRoman\NbaApi\Params\Stats\ContextMeasureParam;
use JasonRoman\NbaApi\Params\Stats\DivisionParam;
use JasonRoman\NbaApi\Params\Stats\EndPeriodParam;
use JasonRoman\NbaApi\Params\Stats\EndRangeParam;
use JasonRoman\NbaApi\Params\Stats\GameSegmentParam;
use JasonRoman\NbaApi\Params\Stats\LastNGamesParam;
use JasonRoman\NbaApi\Params\Stats\LocationParam;
use JasonRoman\NbaApi\Params\Stats\MonthParam;
use JasonRoman\NbaApi\Params\Stats\OutcomeParam;
use JasonRoman\NbaApi\Params\Stats\PeriodParam;
use JasonRoman\NbaApi\Params\Stats\PlayerPositionParam;
use JasonRoman\NbaApi\Params\Stats\PointDiffParam;
use JasonRoman\NbaApi\Params\Stats\RangeTypeParam;
use JasonRoman\NbaApi\Params\Stats\SeasonSegmentParam;
use JasonRoman\NbaApi\Params\Stats\SeasonTypeParam;
use JasonRoman\NbaApi\Params\Stats\StartPeriodParam;
use JasonRoman\NbaApi\Params\Stats\StartRangeParam;
use JasonRoman\NbaApi\Params\TeamIdParam;
use JasonRoman\NbaApi\Request\Stats\Stats\AbstractStatsStatsRequest;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * This appears to no longer be publicly available on the stats nba website but the endpoint still works.
 */
class VideoDetailsRequest extends AbstractStatsStatsRequest
{
    const ENDPOINT = '/stats/videodetails';

    /**
     * @Assert\NotBlank()
     * @Assert\Type("string")
     * @ApiAssert\ApiChoice(LeagueIdParam::OPTIONS_NBA_G_LEAGUE)
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
     * @ApiAssert\ApiChoice(SeasonTypeParam::OPTIONS_WITH_ALL_STAR)
     *
     * @var string
     */
    public $seasonType;

    /**
     * @Assert\NotBlank()
     * @Assert\Type("int")
     * @Assert\Range(min = TeamIdParam::MIN_ALL, max = TeamIdParam::MAX)
     *
     * @var int
     */
    public $teamId;

    /**
     * @Assert\NotBlank()
     * @Assert\Type("int")
     * @Assert\Range(min = PlayerIdParam::MIN, max = PlayerIdParam::MAX)
     *
     * @var int
     */
    public $playerId;

    /**
     * @Assert\Type("string")
     * @ApiAssert\ApiRegex(GameIdParam::FORMAT)
     *
     * @var string
     */
    public $gameId;

    /**
     * @Assert\Type("string")
     * @ApiAssert\ApiChoice(OutcomeParam::OPTIONS)
     *
     * @var string
     */
    public $outcome;

    /**
     * @Assert\Type("string")
     * @ApiAssert\ApiChoice(LocationParam::OPTIONS)
     *
     * @var string
     */
    public $location;

    /**
     * @Assert\NotBlank()
     * @Assert\Type("int")
     * @Assert\Range(min = MonthParam::MIN_ALL, max = MonthParam::MAX)
     *
     * @var int
     */
    public $month;

    /**
     * @Assert\Type("string")
     * @ApiAssert\ApiChoice(SeasonSegmentParam::OPTIONS)
     *
     * @var string
     */
    public $seasonSegment;

    /**
     * @Assert\Type("\DateTime")
     *
     * @var \DateTime
     */
    public $dateFrom;

    /**
     * @Assert\Type("\DateTime")
     *
     * @var \DateTime
     */
    public $dateTo;

    /**
     * @Assert\NotBlank()
     * @Assert\Type("int")
     * @Assert\Range(min = TeamIdParam::MIN_ALL, max = TeamIdParam::MAX)
     *
     * @var int
     */
    public $opponentTeamId;

    /**
     * @Assert\Type("string")
     * @ApiAssert\ApiChoice(ConferenceParam::OPTIONS)
     *
     * @var string
     */
    public $vsConference;

    /**
     * @Assert\Type("string")
     * @ApiAssert\ApiChoice(DivisionParam::OPTIONS_WITH_CONFERENCE)
     *
     * @var string
     */
    public $vsDivision;

    /**
     * This appears to always be considered null on this request even if using a proper value.
     *
     * @Assert\Type("string")
     * @ApiAssert\ApiChoice(PlayerPositionParam::OPTIONS)
     *
     * @var string
     */
    public $position;

    /**
     * @Assert\Type("string")
     * @ApiAssert\ApiRegex(SeasonParam::FORMAT)
     *
     * @var string
     */
    public $rookieYear;

    /**
     * @Assert\Type("string")
     * @ApiAssert\ApiChoice(GameSegmentParam::OPTIONS)
     *
     * @var string
     */
    public $gameSegment;

    /**
     * @Assert\NotBlank()
     * @Assert\Type("int")
     * @Assert\Range(min = PeriodParam::MIN_ALL, max = PeriodParam::MAX)
     *
     * @var int
     */
    public $period;

    /**
     * @Assert\NotBlank()
     * @Assert\Type("int")
     * @Assert\Range(min = LastNGamesParam::MIN_ALL, max = LastNGamesParam::MAX)
     *
     * @var int
     */
    public $lastNGames;

    /**
     * @Assert\Type("string")
     * @ApiAssert\ApiChoice(ClutchTimeParam::OPTIONS)
     *
     * @var string
     */
    public $clutchTime;

    /**
     * @Assert\Type("string")
     * @ApiAssert\ApiChoice(AheadBehindParam::OPTIONS)
     *
     * @var string
     */
    public $aheadBehind;

    /**
     * @Assert\Type("int")
     * @Assert\Range(min = PointDiffParam::MIN, max = PointDiffParam::MAX)
     *
     * @var int
     */
    public $pointDiff;

    /**
     * @Assert\Type("int")
     * @Assert\Range(min = RangeTypeParam::MIN, max = RangeTypeParam::MAX)
     *
     * @var string
     */
    public $rangeType;

    /**
     * @Assert\Type("int")
     * @Assert\Range(min = StartPeriodParam::MIN_ALT, max = StartPeriodParam::MAX_ALT)
     *
     * @var string
     */
    public $startPeriod;

    /**
     * @Assert\Type("int")
     * @Assert\Range(min = EndPeriodParam::MIN_ALT, max = EndPeriodParam::MAX_ALT)
     *
     * @var string
     */
    public $endPeriod;

    /**
     * @Assert\Type("int")
     * @Assert\Range(min = StartRangeParam::MIN, max = StartRangeParam::MAX)
     *
     * @var string
     */
    public $startRange;

    /**
     * @Assert\Type("int")
     * @Assert\Range(min = EndRangeParam::MIN, max = EndRangeParam::MAX)
     *
     * @var string
     */
    public $endRange;

    /**
     * This appears to be "" even if set to something, and does not appear to be used at all.
     *
     * @Assert\Type("string")
     *
     * @var string
     */
    public $contextFilter;

    /**
     * @Assert\NotBlank
     * @Assert\Type("string")
     * @ApiAssert\ApiChoice(ContextMeasureParam::OPTIONS_VIDEO_DETAILS)
     *
     * @var string
     */
    public $contextMeasure;

    /**
     * {@inheritdoc}
     */
    public static function getDefaultValues(): array
    {
        // for some reason none of these are required, so do not set them
        return array_merge(parent::getDefaultValues(), [
            'clutchTime'  => null,
            'aheadBehind' => null,
            'pointDiff'   => null,
            'startPeriod' => StartPeriodParam::MIN_ALT,
            'endPeriod'   => EndPeriodParam::MAX_ALT,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public static function getExampleValues(): array
    {
        // set to null to have actual results returned
        return array_merge(parent::getExampleValues(), [
            'gameId'         => null,
            'teamId'         => TeamIdParam::HOUSTON_ROCKETS,
            'season'         => '2016-17',
            'contextMeasure' => 'FG3M',
        ]);
    }
}