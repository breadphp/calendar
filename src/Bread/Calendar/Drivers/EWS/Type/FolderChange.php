<?php
namespace Bread\Calendar\Drivers\EWS\Type;

use Bread\Calendar\Drivers\EWS\Type;

/**
 * Definition of the FolderChangeType type
 */

/**
 * Definition of the FolderChangeType type
 */
class FolderChange  extends Type
{

    /**
     * FolderId property
     *
     * @var FolderIdType
     */
    public $FolderId;

    /**
     * DistinguishedFolderId property
     *
     * @var DistinguishedFolderIdType
     */
    public $DistinguishedFolderId;

    /**
     * Updates property
     *
     * @var NonEmptyArrayOfFolderChangeDescriptionsType
     */
    public $Updates;
}
