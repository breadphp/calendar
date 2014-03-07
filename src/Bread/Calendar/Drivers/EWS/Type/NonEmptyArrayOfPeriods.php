<?php
namespace Bread\Calendar\Drivers\EWS\Type;

use Bread\Calendar\Drivers\EWS\Type;

/**
 * The Period element defines the name, time offset, and unique identifier for a
 * specific stage of the time zone.
 */

/**
 * Definition of the NonEmptyArrayOfPeriodsType type.
 */
class NonEmptyArrayOfPeriods  extends Type
{

    /**
     * The name, time offset, and unique identifier for a specific stage of the
     * time zone.
     *
     * @var PeriodType
     */
    public $Period;
}
