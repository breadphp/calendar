<?php
namespace Bread\Calendar\Drivers\EWS\Type;

use Bread\Calendar\Drivers\EWS\Type;

/**
 * Definition of the SyncFolderItemsChangesType type
 */

/**
 * Definition of the SyncFolderItemsChangesType type
 */
class SyncFolderItemsChanges  extends Type
{

    /**
     * Create property
     *
     * @var SyncFolderItemsCreateOrUpdateType
     */
    public $Create;

    /**
     * Update property
     *
     * @var SyncFolderItemsCreateOrUpdateType
     */
    public $Update;

    /**
     * Delete property
     *
     * @var SyncFolderItemsDeleteType
     */
    public $Delete;

    /**
     * ReadFlagChange property
     *
     * @var SyncFolderItemsReadFlagType
     */
    public $ReadFlagChange;
}
