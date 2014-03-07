<?php
namespace Bread\Calendar\Drivers\EWS\Type;

use Bread\Calendar\Drivers\EWS\Type;

/**
 * Definition of the ArrayOfResolutionType type
 */

/**
 * Definition of the ArrayOfResolutionType type
 */
class ArrayOfResolution  extends Type
{

    /**
     * Resolution property
     *
     * @var ResolutionType
     */
    public $Resolution;

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
