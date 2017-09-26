<?php

namespace JasonRoman\NbaApi\Request\Stats\Data\Synergy;

use JasonRoman\NbaApi\Request\Stats\Data\AbstractStatsDataRequest;

/**
 * This appears to only work with the 2015 season and the parameters cannot be changed.
 */
class TeamPlayTypeCutRequest extends AbstractStatsDataRequest
{
    const ENDPOINT = '/js/data/playtype/team_Cut.js';
}