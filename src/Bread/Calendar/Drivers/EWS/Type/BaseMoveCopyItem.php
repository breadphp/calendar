<?php
namespace Bread\Calendar\Drivers\EWS\Type;

use Bread\Calendar\Drivers\EWS\Type;

/**
 * Definition of the BaseMoveCopyItemType type
 */

/**
 * Definition of the BaseMoveCopyItemType type
 */
class BaseMoveCopyItem  extends Type
{

    /**
     * ToFolderId property
     *
     * @var TargetFolderIdType
     */
    public $ToFolderId;

    /**
     * ItemIds property
     *
     * @var NonEmptyArrayOfBaseItemIdsType
     */
    public $ItemIds;
}
