<?php
namespace Bread\Calendar\Drivers\EWS\Type;

use Bread\Calendar\Drivers\EWS\Type;

/**
 * Definition of the AttendeeType type
 */

/**
 * Definition of the AttendeeType type
 */
class Attendee  extends Type
{

    /**
     * Mailbox property
     *
     * @var EmailAddressType
     */
    public $Mailbox;

    /**
     * ResponseType property
     *
     * @var ResponseTypeType
     */
    public $Response;

    /**
     * LastResponseTime property
     *
     * @var dateTime
     */
    public $LastResponseTime;
}
