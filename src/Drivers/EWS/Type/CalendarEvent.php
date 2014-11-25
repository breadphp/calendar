<?php
namespace Bread\Calendar\Drivers\EWS\Type;

use Bread\Calendar\Drivers\EWS\Type;

/**
 * Definition of the CalendarEvent type
 */

/**
 * Definition of the CalendarEvent type
 */
class CalendarEvent extends Type
{

    /**
     * Start date and time of the event in ISO 8601 format.
     *
     * @var string
     */
    public $Start;

    /**
     * End date and time of the event in ISO 8601 format.
     *
     * @var string
     */
    public $End;

    /**
     * BusyType property
     *
     * @var LegacyFreeBusyType
     */
    public $Busy;

    /**
     * CalendarEventDetails property
     *
     * @var CalendarEventDetails
     */
    public $CalendarEventDetails;
}
