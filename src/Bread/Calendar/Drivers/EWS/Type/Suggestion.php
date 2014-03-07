<?php
namespace Bread\Calendar\Drivers\EWS\Type;

use Bread\Calendar\Drivers\EWS\Type;

/**
 * Definition of the Suggestion type
 */

/**
 * Definition of the Suggestion type
 */
class Suggestion extends Type
{

    /**
     * MeetingTime property
     *
     * @var dateTime
     */
    public $MeetingTime;

    /**
     * IsWorkTime property
     *
     * @var boolean
     */
    public $IsWorkTime;

    /**
     * SuggestionQuality property
     *
     * @var SuggestionQuality
     */
    public $SuggestionQuality;

    /**
     * AttendeeConflictDataArray property
     *
     * @var ArrayOfAttendeeConflictData
     */
    public $AttendeeConflictDataArray;
}
