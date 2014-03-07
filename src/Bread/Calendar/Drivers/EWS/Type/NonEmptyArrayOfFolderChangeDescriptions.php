<?php
namespace Bread\Calendar\Drivers\EWS\Type;

use Bread\Calendar\Drivers\EWS\Type;

/**
 * Definition of the NonEmptyArrayOfFolderChangeDescriptionsType type
 */

/**
 * Definition of the NonEmptyArrayOfFolderChangeDescriptionsType type
 */
class NonEmptyArrayOfFolderChangeDescriptions  extends Type
{

    /**
     * AppendToFolderField property
     *
     * @var AppendToFolderFieldType
     */
    public $AppendToFolderField;

    /**
     * SetFolderField property
     *
     * @var SetFolderFieldType
     */
    public $SetFolderField;

    /**
     * DeleteFolderField property
     *
     * @var DeleteFolderFieldType
     */
    public $DeleteFolderField;
}
