<?php
namespace Bread\Calendar\Drivers\EWS\Type;

use Bread\Calendar\Drivers\EWS\Type;

/**
 * Represents a time zone transition that occurs on a specific date each year.
 */

/**
 * Definition of the RecurringDateTransitionType type.
 */
class RecurringDateTransition  extends Type
{

    /**
     * Specifies the Period or TransitionsGroup that is the target of the time
     * zone transition.
     *
     * @var TransitionTargetType
     */
    public $To;

    /**
     * The duration offset from Coordinated Universal Time (UTC) for the time
     * zone transition.
     *
     * @var string
     */
    public $TimeOffset;

    /**
     * The month in which the time zone transition occurs.
     *
     * @var integer
     */
    public $Month;

    /**
     * The day of the month on which the time zone transition occurs.
     *
     * @var integer
     */
    public $Day;
}
