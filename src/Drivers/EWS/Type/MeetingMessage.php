<?php
namespace Bread\Calendar\Drivers\EWS\Type;

use Bread\Calendar\Drivers\EWS\Type;

/**
 * Definition of the MeetingMessageType type
 */

/**
 * Definition of the MeetingMessageType type
 */
class MeetingMessage  extends Type
{

    /**
     * AssociatedCalendarItemId property
     *
     * @var ItemIdType
     */
    public $AssociatedCalendarItemId;

    /**
     * IsDelegated property
     *
     * @var boolean
     */
    public $IsDelegated;

    /**
     * IsOutOfDate property
     *
     * @var boolean
     */
    public $IsOutOfDate;

    /**
     * HasBeenProcessed property
     *
     * @var boolean
     */
    public $HasBeenProcessed;

    /**
     * ResponseType property
     *
     * @var ResponseTypeType
     */
    public $Response;

    /**
     * UID property
     *
     * @var string
     */
    public $UID;

    /**
     * RecurrenceId property
     *
     * @var dateTime
     */
    public $RecurrenceId;

    /**
     * DateTimeStamp property
     *
     * @var dateTime
     */
    public $DateTimeStamp;
}
