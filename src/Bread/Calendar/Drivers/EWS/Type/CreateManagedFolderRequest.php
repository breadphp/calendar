<?php
namespace Bread\Calendar\Drivers\EWS\Type;

use Bread\Calendar\Drivers\EWS\Type;

/**
 * Definition of the CreateManagedFolderRequestType type
 */

/**
 * Definition of the CreateManagedFolderRequestType type
 */
class CreateManagedFolderRequest  extends Type
{

    /**
     * FolderNames property
     *
     * @var NonEmptyArrayOfFolderNamesType
     */
    public $FolderNames;

    /**
     * Mailbox property
     *
     * @var EmailAddressType
     */
    public $Mailbox;
}
