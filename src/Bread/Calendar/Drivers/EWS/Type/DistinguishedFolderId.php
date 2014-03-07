<?php
namespace Bread\Calendar\Drivers\EWS\Type;

use Bread\Calendar\Drivers\EWS\Type;

/**
 * Definition of the DistinguishedFolderIdType type
 */

/**
 * Definition of the DistinguishedFolderIdType type
 */
class DistinguishedFolderId  extends Type
{

    /**
     * Mailbox property
     *
     * @var EmailAddressType
     */
    public $Mailbox;

    /**
     * Id property
     *
     * @var DistinguishedFolderIdNameType
     */
    public $Id;

    /**
     * ChangeKey property
     *
     * @var string
     */
    public $ChangeKey;
}
