<?php
namespace Bread\Calendar\Drivers\EWS\Type;

use Bread\Calendar\Drivers\EWS\Type;

/**
 * Definition of the SyncFolderHierarchyType type
 */

/**
 * Definition of the SyncFolderHierarchyType type
 */
class SyncFolderHierarchy  extends Type
{

    /**
     * FolderShape property
     *
     * @var FolderResponseShapeType
     */
    public $FolderShape;

    /**
     * SyncFolderId property
     *
     * @var TargetFolderIdType
     */
    public $SyncFolderId;

    /**
     * SyncState property
     *
     * @var string
     */
    public $SyncState;
}
