<?php
namespace Bread\Calendar\Drivers\EWS\Type;

use Bread\Calendar\Drivers\EWS\Type;

/**
 * Definition of the CreateFolderType type
 */

/**
 * Definition of the CreateFolderType type
 */
class CreateFolder  extends Type
{

    /**
     * ParentFolderId property
     *
     * @var TargetFolderIdType
     */
    public $ParentFolderId;

    /**
     * Folders property
     *
     * @var NonEmptyArrayOfFoldersType
     */
    public $Folders;
}
