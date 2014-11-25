<?php
namespace Bread\Calendar\Drivers\EWS\Type;

use Bread\Calendar\Drivers\EWS\Type;

/**
 * Definition of the WorkingHours type
 */

/**
 * Definition of the WorkingHours type
 */
class WorkingHours extends Type
{

    /**
     * TimeZone property
     *
     * @var SerializableTimeZone
     */
    public $TimeZone;

    /**
     * WorkingPeriodArray property
     *
     * @var ArrayOfWorkingPeriod
     */
    public $WorkingPeriodArray;
}
