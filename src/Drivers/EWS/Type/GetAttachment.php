<?php
namespace Bread\Calendar\Drivers\EWS\Type;

use Bread\Calendar\Drivers\EWS\Type;

/**
 * Definition of the GetAttachmentType type
 */

/**
 * Definition of the GetAttachmentType type
 */
class GetAttachment  extends Type
{

    /**
     * AttachmentShape property
     *
     * @var AttachmentResponseShapeType
     */
    public $AttachmentShape;

    /**
     * AttachmentIds property
     *
     * @var NonEmptyArrayOfRequestAttachmentIdsType
     */
    public $AttachmentIds;
}
