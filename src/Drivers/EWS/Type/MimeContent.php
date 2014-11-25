<?php
namespace Bread\Calendar\Drivers\EWS\Type;

use Bread\Calendar\Drivers\EWS\Type;

/**
 * Definition of the MimeContentType type
 */

/**
 * Definition of the MimeContentType type
 */
class MimeContent  extends Type
{

    /**
     * A text value that represents a base64Binary MIME stream.
     *
     * @var string
     */
    public $_;

    /**
     * The International Standards Organization (ISO) name of the character set
     * used in the MIME message.
     *
     * @var string
     */
    public $CharacterSet;
}
