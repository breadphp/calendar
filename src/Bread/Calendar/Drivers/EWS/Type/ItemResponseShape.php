<?php
namespace Bread\Calendar\Drivers\EWS\Type;

use Bread\Calendar\Drivers\EWS\Type;

/**
 * Definition of the ItemResponseShapeType type
 */

/**
 * Definition of the ItemResponseShapeType type
 */
class ItemResponseShape  extends Type
{

    /**
     * BaseShape property
     *
     * @var DefaultShapeNamesType
     */
    public $BaseShape;

    /**
     * IncludeMimeContent property
     *
     * @var boolean
     */
    public $IncludeMimeContent;

    /**
     * BodyType property
     *
     * @var BodyTypeResponseType
     */
    public $Body;

    /**
     * AdditionalProperties property
     *
     * @var NonEmptyArrayOfPathsToElementType
     */
    public $AdditionalProperties;
}
