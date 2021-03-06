<?php

namespace JasonRoman\NbaApi\Request\Data\Html\Game;

use JasonRoman\NbaApi\Constraints as ApiAssert;
use JasonRoman\NbaApi\Params\GameIdParam;
use JasonRoman\NbaApi\Request\Data\Html\AbstractDataHtmlRequest;
use JasonRoman\NbaApi\Response\ResponseType;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Get the game book PDF of a game. Valid from 2010-2011 preseason and later. Use this over the other gamebook endpoint.
 */
class GameBookRequest extends AbstractDataHtmlRequest
{
    const ENDPOINT = '/html/nbacom/{year}/gameinfo/{gameDate}/{gameId}_Book.pdf';

    const DEFAULT_RESPONSE_TYPE = ResponseType::PDF;

    /**
     * @Assert\NotBlank()
     * @Assert\Type("int")
     * @Assert\Range(min = 2010)
     *
     * @var int
     */
    public $year;

    /**
     * @Assert\NotBlank()
     * @Assert\Type("\DateTime")
     *
     * @var \DateTime
     */
    public $gameDate;

    /**
     * @Assert\NotBlank()
     * @Assert\Type("string")
     * @ApiAssert\ApiRegex(GameIdParam::FORMAT)
     *
     * @var string
     */
    public $gameId;
}