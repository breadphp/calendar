<?php
namespace Bread\Calendar\Drivers\EWS\Type;

use Bread\Calendar\Drivers\EWS\Type;

/**
 * Definition of the ArrayOfDLExpansionType type
 */

/**
 * Definition of the ArrayOfDLExpansionType type
 */
class ArrayOfDLExpansion  extends Type
{

    /**
     * Mailbox property
     *
     * @var EmailAddressType
     */
    public $Mailbox;

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
