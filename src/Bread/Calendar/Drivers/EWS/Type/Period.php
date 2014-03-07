<?php
namespace Bread\Calendar\Drivers\EWS\Type;

use Bread\Calendar\Drivers\EWS\Type;

/**
 * The Period element defines the name, time offset, and unique identifier for a
 * specific stage of the time zone.
 */

/**
 * Definition of the PeriodType type.
 */
class Period  extends Type
{

    /**
     * An xs:duration value that represents the time offset from Coordinated
     * Universal Time (UTC) for the period..
     *
     * @var string
     */
    public $Bias;

    /**
     * A string value that represents the descriptive name of the period.
     *
     * @var string
     */
    public $Name;

    /**
     * A string value that represents the identifier for the period.
     *
     * @var string
     */
    public $Id;
}
