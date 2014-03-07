<?php
namespace Bread\Calendar\Drivers\EWS\Type;

use Bread\Calendar\Drivers\EWS\Type;

/**
 * Definition of the BaseObjectChangedEventType type
 */

/**
 * Definition of the BaseObjectChangedEventType type
 */
class BaseObjectChangedEvent  extends Type
{

    /**
     * TimeStamp property
     *
     * @var dateTime
     */
    public $TimeStamp;

    /**
     * FolderId property
     *
     * @var FolderIdType
     */
    public $FolderId;

    /**
     * ItemId property
     *
     * @var ItemIdType
     */
    public $ItemId;

    /**
     * ParentFolderId property
     *
     * @var FolderIdType
     */
    public $ParentFolderId;
}
