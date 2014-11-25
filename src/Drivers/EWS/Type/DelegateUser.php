<?php
namespace Bread\Calendar\Drivers\EWS\Type;

use Bread\Calendar\Drivers\EWS\Type;

/**
 * Definition of the DelegateUserType type
 */

/**
 * Definition of the DelegateUserType type
 */
class DelegateUser  extends Type
{

    /**
     * UserId property
     *
     * @var UserIdType
     */
    public $UserId;

    /**
     * DelegatePermissions property
     *
     * @var DelegatePermissionsType
     */
    public $DelegatePermissions;

    /**
     * ReceiveCopiesOfMeetingMessages property
     *
     * @var boolean
     */
    public $ReceiveCopiesOfMeetingMessages;

    /**
     * ViewPrivateItems property
     *
     * @var boolean
     */
    public $ViewPrivateItems;
}
