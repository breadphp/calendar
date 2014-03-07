<?php
namespace Bread\Calendar\Drivers\EWS\Type;

use Bread\Calendar\Drivers\EWS\Type;

/**
 * Definition of the BaseMoveCopyFolderType type
 */

/**
 * Definition of the BaseMoveCopyFolderType type
 */
class BaseMoveCopyFolder  extends Type
{

    /**
     * ToFolderId property
     *
     * @var TargetFolderIdType
     */
    public $ToFolderId;

    /**
     * FolderIds property
     *
     * @var NonEmptyArrayOfBaseFolderIdsType
     */
    public $FolderIds;
}
