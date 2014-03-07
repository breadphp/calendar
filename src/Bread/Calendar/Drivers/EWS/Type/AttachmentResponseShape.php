<?php
namespace Bread\Calendar\Drivers\EWS\Type;

use Bread\Calendar\Drivers\EWS\Type;

/**
 * Definition of the AttachmentResponseShapeType type
 */

/**
 * Definition of the AttachmentResponseShapeType type
 */
class AttachmentResponseShape  extends Type
{

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
