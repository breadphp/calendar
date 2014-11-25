<?php
namespace Bread\Calendar\Drivers\EWS\Type;

use Bread\Calendar\Drivers\EWS\Type;

/**
 * Definition of the SensitivityChoicesType type
 */

/**
 * Definition of the SensitivityChoicesType type
 */
class SensitivityChoices  extends Type
{

    /**
     * Sensitivity level of the item
     *
     * @var string
     */
    public $_;

    /**
     * Indiciates theat the item is confidential.
     *
     * @var string
     */
    const CONFIDENTIAL = 'Confidential';

    /**
     * Indiciates theat the item has a normal sensativity.
     *
     * @var string
     */
    const NORMAL = 'Normal';

    /**
     * Indiciates theat the item is personal.
     *
     * @var string
     */
    const PERSONAL = 'Personal';

    /**
     * Indiciates theat the item is private.
     *
     * @var string
     */
    const PRIVATE_ITEM = 'Private';

    /**
     * Converts the object to a string.
     *
     * @return string The string representation of the current object.
     */
    public function __toString()
    {
        return $this->_;
    }
}
