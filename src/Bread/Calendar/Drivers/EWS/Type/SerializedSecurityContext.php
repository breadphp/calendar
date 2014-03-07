<?php
namespace Bread\Calendar\Drivers\EWS\Type;

use Bread\Calendar\Drivers\EWS\Type;

/**
 * Definition of the SerializedSecurityContextType type
 */

/**
 * Definition of the SerializedSecurityContextType type
 */
class SerializedSecurityContext extends Type
{

    /**
     * UserSid property
     *
     * @var string
     */
    public $UserSid;

    /**
     * GroupSids property
     *
     * @var NonEmptyArrayOfGroupIdentifiersType
     */
    public $GroupSids;

    /**
     * RestrictedGroupSids property
     *
     * @var NonEmptyArrayOfRestrictedGroupIdentifiersType
     */
    public $RestrictedGroupSids;

    /**
     * PrimarySmtpAddress property
     *
     * @var string
     */
    public $PrimarySmtpAddress;
}
