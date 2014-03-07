<?php
namespace Bread\Calendar\Drivers\EWS\Type;

use Bread\Calendar\Drivers\EWS\Type;

/**
 * The Exists element represents a search expression that returns true if the
 * supplied property exists on an item.
 */

/**
 * Definition of the ExistsType type.
 */
class Exists  extends Type
{

    /**
     * Identifies frequently referenced properties by URI.
     *
     * @var PathToUnindexedFieldType
     */
    public $FieldURI;

    /**
     * Identifies individual members of a dictionary.
     *
     * @var PathToIndexedFieldType
     */
    public $IndexedFieldURI;

    /**
     * Identifies MAPI properties.
     *
     * @var PathToExtendedFieldType
     */
    public $ExtendedFieldURI;
}
