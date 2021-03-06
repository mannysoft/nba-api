<?php

namespace JasonRoman\NbaApi\Request\Stats\Widgets\Homepage;

use JasonRoman\NbaApi\Request\Stats\Widgets\AbstractStatsWidgetsRequest;

/**
 * Get the homepage sidebar. After the season is over it contains the season recap.
 * @todo Will have to check back during preseason/regular season to see what it contains there.
 */
class HomepageSidebarRequest extends AbstractStatsWidgetsRequest
{
    const ENDPOINT = '/js/data/widgets/home_sidebar.json';
}