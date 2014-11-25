<?php
namespace Bread\Calendar\Drivers\EWS\Type;

use Bread\Calendar\Drivers\EWS\Type;

/**
 * Definition of the SerializableTimeZone type
 */

/**
 * Definition of the SerializableTimeZone type
 */
class SerializableTimeZone extends Type
{

    /**
     * Bias property
     *
     * @var integer
     */
    public $Bias;

    /**
     * StandardTime property
     *
     * @var SerializableTimeZoneTime
     */
    public $StandardTime;

    /**
     * DaylightTime property
     *
     * @var SerializableTimeZoneTime
     */
    public $DaylightTime;
}
