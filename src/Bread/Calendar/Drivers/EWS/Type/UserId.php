<?php
namespace Bread\Calendar\Drivers\EWS\Type;

use Bread\Calendar\Drivers\EWS\Type;

/**
 * Definition of the UserIdType type
 */

/**
 * Definition of the UserIdType type
 */
class UserId  extends Type
{

    /**
     * SID property
     *
     * @var string
     */
    public $SID;

    /**
     * PrimarySmtpAddress property
     *
     * @var string
     */
    public $PrimarySmtpAddress;

    /**
     * DisplayName property
     *
     * @var string
     */
    public $DisplayName;

    /**
     * DistinguishedUser property
     *
     * @var DistinguishedUserType
     */
    public $DistinguishedUser;
}
