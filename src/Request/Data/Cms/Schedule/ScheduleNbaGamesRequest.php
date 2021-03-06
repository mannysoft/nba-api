<?php

namespace JasonRoman\NbaApi\Request\Data\Cms\Schedule;

use JasonRoman\NbaApi\Request\Data\Cms\AbstractDataCmsRequest;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Get the schedule of NBA games for a season. No parameters ; 2015-16 shows postseason, 2016-17 shows regular season.
 * This may potentially change any time a new season type starts; so 2017-18 preseason could affect what shows for 2016.
 */
class ScheduleNbaGamesRequest extends AbstractDataCmsRequest
{
    const ENDPOINT = '/json/cms/{year}/league/nba_games.json';

    /**
     * @Assert\NotBlank()
     * @Assert\Type("int")
     * @Assert\Range(min = 2014)
     *
     * @var int
     */
    public $year;
}