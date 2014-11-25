<?php
namespace Bread\Calendar\Drivers\EWS\Type;

use Bread\Calendar\Drivers\EWS\Type;

/**
 * Definition of the ImportanceChoicesType type
 */

/**
 * Definition of the ImportanceChoicesType type
 */
class ImportanceChoices  extends Type
{

    /**
     * Importance level of the item.
     *
     * @var string
     */
    public $_;

    /**
     * High importance level.
     *
     * @var string
     */
    const HIGH = 'High';

    /**
     * Low importance level.
     *
     * @var string
     */
    const LOW = 'Low';

    /**
     * Normal importance level.
     *
     * @var string
     */
    const NORMAL = 'Normal';

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
