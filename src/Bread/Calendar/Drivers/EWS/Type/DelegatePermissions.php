<?php
namespace Bread\Calendar\Drivers\EWS\Type;

use Bread\Calendar\Drivers\EWS\Type;

/**
 * Definition of the DelegatePermissionsType type
 */

/**
 * Definition of the DelegatePermissionsType type
 */
class DelegatePermissions  extends Type
{

    /**
     * CalendarFolderPermissionLevel property
     *
     * @var DelegateFolderPermissionLevelType
     */
    public $CalendarFolderPermissionLevel;

    /**
     * TasksFolderPermissionLevel property
     *
     * @var DelegateFolderPermissionLevelType
     */
    public $TasksFolderPermissionLevel;

    /**
     * InboxFolderPermissionLevel property
     *
     * @var DelegateFolderPermissionLevelType
     */
    public $InboxFolderPermissionLevel;

    /**
     * ContactsFolderPermissionLevel property
     *
     * @var DelegateFolderPermissionLevelType
     */
    public $ContactsFolderPermissionLevel;

    /**
     * NotesFolderPermissionLevel property
     *
     * @var DelegateFolderPermissionLevelType
     */
    public $NotesFolderPermissionLevel;

    /**
     * JournalFolderPermissionLevel property
     *
     * @var DelegateFolderPermissionLevelType
     */
    public $JournalFolderPermissionLevel;
}
