<?php
namespace Bread\Calendar\Drivers\EWS\Type;

use Bread\Calendar\Drivers\EWS\Type;

/**
 * Definition of the PathToExtendedFieldType type
 */

/**
 * Definition of the PathToExtendedFieldType type
 */
class PathToExtendedField  extends Type
{

    /**
     * DistinguishedPropertySetId property
     *
     * @var DistinguishedPropertySetType
     */
    public $DistinguishedPropertySetId;

    /**
     * PropertySetId property
     *
     * @var GuidType
     */
    public $PropertySetId;

    /**
     * PropertyTag property
     *
     * @var PropertyTagType
     */
    public $PropertyTag;

    /**
     * PropertyName property
     *
     * @var string
     */
    public $PropertyName;

    /**
     * PropertyId property
     *
     * @var integer
     */
    public $PropertyId;

    /**
     * PropertyType property
     *
     * @var MapiPropertyTypeType
     */
    public $Property;
}
