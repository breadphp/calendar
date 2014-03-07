<?php
namespace Bread\Calendar\Drivers\EWS\Type;

use Bread\Calendar\Drivers\EWS\Type;

/**
 * Definition of the CreateAttachmentType type
 */

/**
 * Definition of the CreateAttachmentType type
 */
class CreateAttachment  extends Type
{

    /**
     * ParentItemId property
     *
     * @var ItemIdType
     */
    public $ParentItemId;

    /**
     * Attachments property
     *
     * @var NonEmptyArrayOfAttachmentsType
     */
    public $Attachments;
}
