<?php
namespace Bread\Calendar\Drivers\EWS\Type;

use Bread\Calendar\Drivers\EWS\Type;

/**
 * Definition of the TimeChangeType type
 */

/**
 * Definition of the TimeChangeType type
 */
class TimeChange  extends Type
{

    /**
     * Offset property
     *
     * @var duration
     */
    public $Offset;

    /**
     * RelativeYearlyRecurrence property
     *
     * @var RelativeYearlyRecurrencePatternType
     */
    public $RelativeYearlyRecurrence;

    /**
     * AbsoluteDate property
     *
     * @var date
     */
    public $AbsoluteDate;

    /**
     * Time property
     *
     * @var time
     */
    public $Time;

    /**
     * TimeZoneName property
     *
     * @var string
     */
    public $TimeZoneName;
}
