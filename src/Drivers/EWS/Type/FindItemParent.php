<?php
namespace Bread\Calendar\Drivers\EWS\Type;

use Bread\Calendar\Drivers\EWS\Type;

/**
 * Definition of the FindItemParentType type
 */

/**
 * Definition of the FindItemParentType type
 */
class FindItemParent  extends Type
{

    /**
     * Items property
     *
     * @var ArrayOfRealItemsType
     */
    public $Items;

    /**
     * Groups property
     *
     * @var ArrayOfGroupedItemsType
     */
    public $Groups;

    /**
     * IndexedPagingOffset property
     *
     * @var integer
     */
    public $IndexedPagingOffset;

    /**
     * NumeratorOffset property
     *
     * @var integer
     */
    public $NumeratorOffset;

    /**
     * AbsoluteDenominator property
     *
     * @var integer
     */
    public $AbsoluteDenominator;

    /**
     * IncludesLastItemInRange property
     *
     * @var boolean
     */
    public $IncludesLastItemInRange;

    /**
     * TotalItemsInView property
     *
     * @var integer
     */
    public $TotalItemsInView;
}
