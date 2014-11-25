<?php
namespace Bread\Calendar\Drivers\EWS\Type;

use Bread\Calendar\Drivers\EWS\Type;

/**
 * Definition of the MovedCopiedEventType type
 */

/**
 * Definition of the MovedCopiedEventType type
 */
class MovedCopiedEvent  extends Type
{

    /**
     * OldFolderId property
     *
     * @var FolderIdType
     */
    public $OldFolderId;

    /**
     * OldItemId property
     *
     * @var ItemIdType
     */
    public $OldItemId;

    /**
     * OldParentFolderId property
     *
     * @var FolderIdType
     */
    public $OldParentFolderId;
}
