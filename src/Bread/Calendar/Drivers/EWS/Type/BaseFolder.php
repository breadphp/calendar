<?php
namespace Bread\Calendar\Drivers\EWS\Type;

use Bread\Calendar\Drivers\EWS\Type;

/**
 * Definition of the BaseFolderType type
 */

/**
 * Definition of the BaseFolderType type
 */
class BaseFolder  extends Type
{

    /**
     * FolderId property
     *
     * @var FolderIdType
     */
    public $FolderId;

    /**
     * ParentFolderId property
     *
     * @var FolderIdType
     */
    public $ParentFolderId;

    /**
     * FolderClass property
     *
     * @var string
     */
    public $FolderClass;

    /**
     * DisplayName property
     *
     * @var string
     */
    public $DisplayName;

    /**
     * TotalCount property
     *
     * @var integer
     */
    public $TotalCount;

    /**
     * ChildFolderCount property
     *
     * @var integer
     */
    public $ChildFolderCount;

    /**
     * ExtendedProperty property
     *
     * @var ExtendedPropertyType
     */
    public $ExtendedProperty;

    /**
     * ManagedFolderInformation property
     *
     * @var ManagedFolderInformationType
     */
    public $ManagedFolderInformation;

    /**
     * EffectiveRights property
     *
     * @var EffectiveRightsType
     */
    public $EffectiveRights;
}
