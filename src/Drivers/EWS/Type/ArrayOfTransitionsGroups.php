<?php
namespace Bread\Calendar\Drivers\EWS\Type;

use Bread\Calendar\Drivers\EWS\Type;

/**
 * The TransitionsGroups element represents an array of time zone transition
 * groups.
 */

/**
 * Definition of the ArrayOfTransitionsGroupsType type.
 */
class ArrayOfTransitionsGroups  extends Type
{

    /**
     * Represents an array of time zone transitions.
     *
     * @var ArrayOfTransitionsType
     */
    public $TransitionsGroup;
}
