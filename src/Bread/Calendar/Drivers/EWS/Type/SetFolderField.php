<?php
namespace Bread\Calendar\Drivers\EWS\Type;

use Bread\Calendar\Drivers\EWS\Type;

/**
 * Definition of the SetFolderFieldType type
 */

/**
 * Definition of the SetFolderFieldType type
 */
class SetFolderField  extends Type
{

    /**
     * Folder property
     *
     * @var FolderType
     */
    public $Folder;

    /**
     * CalendarFolder property
     *
     * @var CalendarFolderType
     */
    public $CalendarFolder;

    /**
     * ContactsFolder property
     *
     * @var ContactsFolderType
     */
    public $ContactsFolder;

    /**
     * SearchFolder property
     *
     * @var SearchFolderType
     */
    public $SearchFolder;

    /**
     * TasksFolder property
     *
     * @var TasksFolderType
     */
    public $TasksFolder;
}
