<?php
namespace Bread\Calendar\Drivers\EWS\Type;

use Bread\Calendar\Drivers\EWS\Type;

/**
 * Definition of the ExtendedPropertyType type
 */

/**
 * Definition of the ExtendedPropertyType type
 */
class ExtendedProperty  extends Type
{

    /**
     * ExtendedFieldURI property
     *
     * @var PathToExtendedFieldType
     */
    public $ExtendedFieldURI;

    /**
     * Value property
     *
     * @var string
     */
    public $Value;

    /**
     * Values property
     *
     * @var NonEmptyArrayOfPropertyValuesType
     */
    public $Values;
}
