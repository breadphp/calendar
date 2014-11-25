<?php
namespace Bread\Calendar\Drivers\EWS\Type;

use Bread\Calendar\Drivers\EWS\Type;

/**
 * Definition of the GetServerTimeZonesType type
 */

/**
 * Definition of the GetServerTimeZonesType type
 */
class GetServerTimeZones  extends Type
{

    /**
     * Collection of timezone identifiers to get the definition for.
     * Omit to get
     * the definition of all timezones supported by the server.
     *
     * @var NonEmptyArrayOfTimeZoneIdType
     */
    public $Ids;
}
