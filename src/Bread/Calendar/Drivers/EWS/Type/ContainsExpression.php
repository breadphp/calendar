<?php
namespace Bread\Calendar\Drivers\EWS\Type;

use Bread\Calendar\Drivers\EWS\Type;

/**
 * The Contains element represents a search expression that determines whether a
 * given property contains the supplied constant string value.
 */

/**
 * Definition of the ContainsExpressionType type.
 */
class ContainsExpression  extends Type
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
     * Identifies a constant value in a restriction.
     *
     * @var ConstantValueType
     */
    public $Constant;

    /**
     * Identifies the boundaries of a search.
     *
     * @var ContainmentModeType
     */
    public $ContainmentMode;

    /**
     * Determines whether the search ignores cases and spaces.
     *
     * @var ContainmentComparisonType
     */
    public $ContainmentComparison;
}
