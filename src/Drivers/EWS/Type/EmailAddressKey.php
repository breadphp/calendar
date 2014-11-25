<?php
namespace Bread\Calendar\Drivers\EWS\Type;

use Bread\Calendar\Drivers\EWS\Type;

/**
 * Definition of the EmailAddressKeyType type
 */

/**
 * Email address key type
 */
class EmailAddressKey  extends Type
{

    /**
     * Key for a contacts first email address
     *
     * @var string
     */
    const EMAIL_ADDRESS_1 = 'EmailAddress1';

    /**
     * Key for a contacts second email address
     *
     * @var string
     */
    const EMAIL_ADDRESS_2 = 'EmailAddress2';

    /**
     * Key for a contacts third email address
     *
     * @var string
     */
    const EMAIL_ADDRESS_3 = 'EmailAddress3';

    /**
     * Value of the desired mapping.
     * Should be one of the constants from the
     * EmailAddressKeyType class.
     *
     * @var string
     */
    public $_;

    /**
     * Returns the value of this object as a string
     *
     * @return string
     */
    public function __toString()
    {
        return $this->_;
    }
}
