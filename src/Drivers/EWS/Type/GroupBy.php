<?php
namespace Bread\Calendar\Drivers\EWS\Type;

use Bread\Calendar\Drivers\EWS\Type;

/**
 * Definition of the GroupByType type
 */

/**
 * Definition of the GroupByType type
 */
class GroupBy  extends Type
{

    /**
     * FieldURI property
     *
     * @var PathToUnindexedFieldType
     */
    public $FieldURI;

    /**
     * IndexedFieldURI property
     *
     * @var PathToIndexedFieldType
     */
    public $IndexedFieldURI;

    /**
     * ExtendedFieldURI property
     *
     * @var PathToExtendedFieldType
     */
    public $ExtendedFieldURI;

    /**
     * AggregateOn property
     *
     * @var AggregateOnType
     */
    public $AggregateOn;

    /**
     * Order property
     *
     * @var SortDirectionType
     */
    public $Order;
}
