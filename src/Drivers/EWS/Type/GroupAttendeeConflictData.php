<?php
namespace Bread\Calendar\Drivers\EWS\Type;

use Bread\Calendar\Drivers\EWS\Type;

/**
 * Definition of the GroupAttendeeConflictData type
 */

/**
 * Definition of the GroupAttendeeConflictData type
 */
class GroupAttendeeConflictData extends Type
{

    /**
     * NumberOfMembers property
     *
     * @var integer
     */
    public $NumberOfMembers;

    /**
     * NumberOfMembersAvailable property
     *
     * @var integer
     */
    public $NumberOfMembersAvailable;

    /**
     * NumberOfMembersWithConflict property
     *
     * @var integer
     */
    public $NumberOfMembersWithConflict;

    /**
     * NumberOfMembersWithNoData property
     *
     * @var integer
     */
    public $NumberOfMembersWithNoData;
}
