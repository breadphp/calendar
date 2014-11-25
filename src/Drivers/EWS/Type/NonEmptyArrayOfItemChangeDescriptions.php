<?php
namespace Bread\Calendar\Drivers\EWS\Type;

use Bread\Calendar\Drivers\EWS\Type;

/**
 * Definition of the NonEmptyArrayOfItemChangeDescriptionsType type
 */

/**
 * Definition of the NonEmptyArrayOfItemChangeDescriptionsType type
 */
class NonEmptyArrayOfItemChangeDescriptions  extends Type
{

    /**
     * AppendToItemField property
     *
     * @var AppendToItemFieldType
     */
    public $AppendToItemField;

    /**
     * SetItemField property
     *
     * @var SetItemFieldType
     */
    public $SetItemField;

    /**
     * DeleteItemField property
     *
     * @var DeleteItemFieldType
     */
    public $DeleteItemField;
}
