<?php
namespace Bread\Calendar\Drivers\EWS\Type;

use Bread\Calendar\Drivers\EWS\Type;

/**
 * Definition of the ArrayOfStringsType type
 */

/**
 * Definition of the ArrayOfStringsType type
 */
class ArrayOfStrings  extends Type
{

    /**
     * String property
     *
     * @var string
     */
    public $String;

    /**
     * Properly converts the value of this type to a string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->String;
    }
}
