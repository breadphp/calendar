<?php
namespace Bread\Calendar\Drivers\EWS\Type;

use Bread\Calendar\Drivers\EWS\Type;

/**
 * The IsEqualTo element represents a search expression that compares a property
 * with either a constant value or another property and evaluates to true if
 * they are equal.
 */

/**
 * Definition of the IsEqualToType type.
 */
class IsEqualTo  extends Type
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
