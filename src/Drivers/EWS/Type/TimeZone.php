<?php
namespace Bread\Calendar\Drivers\EWS\Type;

use Bread\Calendar\Drivers\EWS\Type;

/**
 * Definition of the TimeZoneType type
 */

/**
 * Definition of the TimeZoneType type
 */
class TimeZone  extends Type
{

    /**
     * BaseOffset property
     *
     * @var duration
     */
    public $BaseOffset;

    /**
     * Standard property
     *
     * @var TimeChangeType
     */
    public $Standard;

    /**
     * Daylight property
     *
     * @var TimeChangeType
     */
    public $Daylight;

    /**
     * TimeZoneName property
     *
     * @var string
     */
    public $TimeZoneName;
}
