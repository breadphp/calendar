<?php
namespace Bread\Calendar\Drivers\EWS\Type;

use Bread\Calendar\Drivers\EWS\Type;

/**
 * Definition of the PermissionSetType type
 */

/**
 * Definition of the PermissionSetType type
 */
class PermissionSet  extends Type
{

    /**
     * Permissions property
     *
     * @var ArrayOfPermissionsType
     */
    public $Permissions;

    /**
     * UnknownEntries property
     *
     * @var ArrayOfUnknownEntriesType
     */
    public $UnknownEntries;
}
