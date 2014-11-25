<?php
namespace Bread\Calendar\Drivers\EWS\Type;


/**
 * Definition of the EmailAddress type
 */

/**
 * Definition of the EmailAddress type
 */
class EmailAddress extends Email
{

    /**
     * EmailAddress property
     *
     * @var EWSType_NonEmptyStringType
     */
    public $EmailAddress;

    /**
     * MailboxType property
     *
     * @var EWSType_MailboxTypeType
     */
    public $MailboxType;

    /**
     * ItemId property
     *
     * @var EWSType_ItemIdType
     */
    public $ItemId;
}
