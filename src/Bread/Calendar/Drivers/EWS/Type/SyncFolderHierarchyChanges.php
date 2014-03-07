<?php
namespace Bread\Calendar\Drivers\EWS\Type;

use Bread\Calendar\Drivers\EWS\Type;

/**
 * Definition of the SyncFolderHierarchyChangesType type
 */

/**
 * Definition of the SyncFolderHierarchyChangesType type
 */
class SyncFolderHierarchyChanges  extends Type
{

    /**
     * Create property
     *
     * @var SyncFolderHierarchyCreateOrUpdateType
     */
    public $Create;

    /**
     * Update property
     *
     * @var SyncFolderHierarchyCreateOrUpdateType
     */
    public $Update;

    /**
     * Delete property
     *
     * @var SyncFolderHierarchyDeleteType
     */
    public $Delete;
}
