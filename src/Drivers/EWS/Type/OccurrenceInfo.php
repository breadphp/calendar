<?php
namespace Bread\Calendar\Drivers\EWS\Type;

use Bread\Calendar\Drivers\EWS\Type;

/**
 * Definition of the OccurrenceInfoType type
 */

/**
 * Definition of the OccurrenceInfoType type
 */
class OccurrenceInfo  extends Type
{

    /**
     * ItemId property
     *
     * @var ItemIdType
     */
    public $ItemId;

    /**
     * Start property
     *
     * @var dateTime
     */
    public $Start;

    /**
     * End property
     *
     * @var dateTime
     */
    public $End;

    /**
     * OriginalStart property
     *
     * @var dateTime
     */
    public $OriginalStart;
}
