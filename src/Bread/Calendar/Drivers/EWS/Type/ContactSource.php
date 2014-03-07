<?php
namespace Bread\Calendar\Drivers\EWS\Type;

use Bread\Calendar\Drivers\EWS\Type;

/**
 * Definition of the ContactSourceType type
 */

/**
 * Definition of the ContactSourceType type
 */
class ContactSource  extends Type
{

    /**
     * Contact is stored in Active Directory.
     *
     * @var string
     */
    const ACTIVE_DIRECTORY = 'ActiveDirectory';

    /**
     * Contact is stored in the Exchange Store.
     *
     * @var string
     */
    const EXCHANGE_STORE = 'Store';
}
