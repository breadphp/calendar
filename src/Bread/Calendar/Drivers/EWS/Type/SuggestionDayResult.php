<?php
namespace Bread\Calendar\Drivers\EWS\Type;

use Bread\Calendar\Drivers\EWS\Type;

/**
 * Definition of the SuggestionDayResult type
 */

/**
 * Definition of the SuggestionDayResult type
 */
class SuggestionDayResult extends Type
{

    /**
     * Date property
     *
     * @var dateTime
     */
    public $Date;

    /**
     * DayQuality property
     *
     * @var SuggestionQuality
     */
    public $DayQuality;

    /**
     * SuggestionArray property
     *
     * @var ArrayOfSuggestion
     */
    public $SuggestionArray;
}
