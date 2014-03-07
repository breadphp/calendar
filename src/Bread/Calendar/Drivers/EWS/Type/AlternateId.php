<?php
namespace Bread\Calendar\Drivers\EWS\Type;

use Bread\Calendar\Drivers\EWS\Type;

/**
 * Definition of the AlternateIdType type
 */

/**
 * Definition of the AlternateIdType type
 */
class AlternateId  extends Type
{

    /**
     * Id property
     *
     * @var string
     */
    public $Id;

    /**
     * Mailbox property
     *
     * @var NonEmptyStringType
     */
    public $Mailbox;
}
