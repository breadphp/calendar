<?php
namespace Bread\Calendar\Drivers\EWS\Type;

use Bread\Calendar\Drivers\EWS\Type;

/**
 * Definition of the CreateItemType type
 */

/**
 * Definition of the CreateItemType type
 */
class CreateItem  extends Type
{

    /**
     * SavedItemFolderId property
     *
     * @var TargetFolderIdType
     */
    public $SavedItemFolderId;

    /**
     * Items property
     *
     * @var NonEmptyArrayOfAllItemsType
     */
    public $Items;

    /**
     * MessageDisposition property
     *
     * @var MessageDispositionType
     */
    public $MessageDisposition;

    /**
     * SendMeetingInvitations property
     *
     * @var CalendarItemCreateOrDeleteOperationType
     */
    public $SendMeetingInvitations;
}
