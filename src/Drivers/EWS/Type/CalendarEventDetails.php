<?php
namespace Bread\Calendar\Drivers\EWS\Type;

use Bread\Calendar\Drivers\EWS\Type;

/**
 * Definition of the CalendarEventDetails type
 */

/**
 * Definition of the CalendarEventDetails type
 */
class CalendarEventDetails extends Type
{

    /**
     * ID property
     *
     * @var string
     */
    public $ID;

    /**
     * Subject property
     *
     * @var string
     */
    public $Subject;

    /**
     * Location property
     *
     * @var string
     */
    public $Location;

    /**
     * IsMeeting property
     *
     * @var boolean
     */
    public $IsMeeting;

    /**
     * IsRecurring property
     *
     * @var boolean
     */
    public $IsRecurring;

    /**
     * IsException property
     *
     * @var boolean
     */
    public $IsException;

    /**
     * IsReminderSet property
     *
     * @var boolean
     */
    public $IsReminderSet;

    /**
     * IsPrivate property
     *
     * @var boolean
     */
    public $IsPrivate;
}
