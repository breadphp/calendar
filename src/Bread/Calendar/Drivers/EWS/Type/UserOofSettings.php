<?php
namespace Bread\Calendar\Drivers\EWS\Type;

use Bread\Calendar\Drivers\EWS\Type;

/**
 * Definition of the UserOofSettings type
 */

/**
 * Definition of the UserOofSettings type
 */
class UserOofSettings extends Type
{

    /**
     * OofState property
     *
     * @var OofState
     */
    public $OofState;

    /**
     * ExternalAudience property
     *
     * @var ExternalAudience
     */
    public $ExternalAudience;

    /**
     * Duration property
     *
     * @var Duration
     */
    public $Duration;

    /**
     * InternalReply property
     *
     * @var ReplyBody
     */
    public $InternalReply;

    /**
     * ExternalReply property
     *
     * @var ReplyBody
     */
    public $ExternalReply;
}
