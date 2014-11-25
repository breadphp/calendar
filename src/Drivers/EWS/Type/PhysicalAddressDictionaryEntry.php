<?php
namespace Bread\Calendar\Drivers\EWS\Type;

use Bread\Calendar\Drivers\EWS\Type;

/**
 * Definition of the PhysicalAddressDictionaryEntryType type
 */

/**
 * Definition of the PhysicalAddressDictionaryEntryType type
 */
class PhysicalAddressDictionaryEntry  extends Type
{

    /**
     * Street property
     *
     * @var string
     */
    public $Street;

    /**
     * City property
     *
     * @var string
     */
    public $City;

    /**
     * State property
     *
     * @var string
     */
    public $State;

    /**
     * CountryOrRegion property
     *
     * @var string
     */
    public $CountryOrRegion;

    /**
     * PostalCode property
     *
     * @var string
     */
    public $PostalCode;

    /**
     * Key property
     *
     * @var PhysicalAddressKeyType
     */
    public $Key;
}
