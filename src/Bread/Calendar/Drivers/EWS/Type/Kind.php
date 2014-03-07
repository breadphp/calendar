<?php
namespace Bread\Calendar\Drivers\EWS\Type;

use Bread\Calendar\Drivers\EWS\Type;

/**
 * Definition of the KindType type.
 */

/**
 * Definition of the KindType type.
 */
class Kind  extends Type
{

    /**
     * Specifies that the time zone transition target is a time zone period.
     *
     * @var string
     */
    const PERIOD = 'Period';

    /**
     * Specifies that the time zone transition target is a group of time zone
     * transitions.
     *
     * @var string
     */
    const GROUP = 'Group';

    /**
     * Element value.
     *
     * @var string
     */
    public $_;

    /**
     * Returns the value of this object as a string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->_;
    }
}
