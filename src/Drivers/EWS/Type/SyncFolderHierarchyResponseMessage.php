<?php
namespace Bread\Calendar\Drivers\EWS\Type;

use Bread\Calendar\Drivers\EWS\Type;

/**
 * Definition of the SyncFolderHierarchyResponseMessageType type
 */

/**
 * Definition of the SyncFolderHierarchyResponseMessageType type
 */
class SyncFolderHierarchyResponseMessage  extends Type
{

    /**
     * SyncState property
     *
     * @var string
     */
    public $SyncState;

    /**
     * IncludesLastFolderInRange property
     *
     * @var boolean
     */
    public $IncludesLastFolderInRange;

    /**
     * Changes property
     *
     * @var SyncFolderHierarchyChangesType
     */
    public $Changes;
}
