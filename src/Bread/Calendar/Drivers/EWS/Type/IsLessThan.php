<?php
namespace Bread\Calendar\Drivers\EWS\Type;

use Bread\Calendar\Drivers\EWS\Type;

/**
 * The IsLessThan element represents a search expression that compares a
 * property with either a constant value or another property and returns true if
 * the first property is less than the second.
 */

/**
 * Definition of the IsLessThanType type.
 */
class IsLessThan  extends Type
{

    /**
     * Identifies frequently referenced properties by URI.
     *
     * @var PathToUnindexedFieldType
     */
    public $FieldURI;

    /**
     * Identifies individual members of a dictionary.
     *
     * @var PathToIndexedFieldType
     */
    public $IndexedFieldURI;

    /**
     * Identifies MAPI properties.
     *
     * @var PathToExtendedFieldType
     */
    public $ExtendedFieldURI;

    /**
     * Represents either a property or a constant value to be used when
     * comparing with another property.
     *
     * @var FieldURIOrConstantType
     */
    public $FieldURIOrConstant;
}
