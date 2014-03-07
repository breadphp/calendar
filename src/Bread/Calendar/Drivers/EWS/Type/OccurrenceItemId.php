<?php
namespace Bread\Calendar\Drivers\EWS\Type;

use Bread\Calendar\Drivers\EWS\Type;

/**
 * Definition of the OccurrenceItemIdType type
 */

/**
 * Definition of the OccurrenceItemIdType type
 */
class OccurrenceItemId  extends Type
{

    /**
     * RecurringMasterId property
     *
     * @var DerivedItemIdType
     */
    public $RecurringMasterId;

    /**
     * ChangeKey property
     *
     * @var string
     */
    public $ChangeKey;

    /**
     * InstanceIndex property
     *
     * @var integer
     */
    public $InstanceIndex;
}
