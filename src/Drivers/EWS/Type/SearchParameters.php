<?php
namespace Bread\Calendar\Drivers\EWS\Type;

use Bread\Calendar\Drivers\EWS\Type;

/**
 * Definition of the SearchParametersType type
 */

/**
 * Definition of the SearchParametersType type
 */
class SearchParameters  extends Type
{

    /**
     * Restriction property
     *
     * @var RestrictionType
     */
    public $Restriction;

    /**
     * BaseFolderIds property
     *
     * @var NonEmptyArrayOfBaseFolderIdsType
     */
    public $BaseFolderIds;

    /**
     * Traversal property
     *
     * @var SearchFolderTraversalType
     */
    public $Traversal;
}
