<?php
namespace Bread\Calendar\Drivers\EWS\Type;

use Bread\Calendar\Drivers\EWS\Type;

/**
 * Definition of the SmartResponseBaseType type
 */

/**
 * Definition of the SmartResponseBaseType type
 */
class SmartResponseBase  extends Type
{

    /**
     * Subject property
     *
     * @var string
     */
    public $Subject;

    /**
     * Body property
     *
     * @var BodyType
     */
    public $Body;

    /**
     * ToRecipients property
     *
     * @var ArrayOfRecipientsType
     */
    public $ToRecipients;

    /**
     * CcRecipients property
     *
     * @var ArrayOfRecipientsType
     */
    public $CcRecipients;

    /**
     * BccRecipients property
     *
     * @var ArrayOfRecipientsType
     */
    public $BccRecipients;

    /**
     * IsReadReceiptRequested property
     *
     * @var boolean
     */
    public $IsReadReceiptRequested;

    /**
     * IsDeliveryReceiptRequested property
     *
     * @var boolean
     */
    public $IsDeliveryReceiptRequested;

    /**
     * From property
     *
     * @var SingleRecipientType
     */
    public $From;

    /**
     * ReferenceItemId property
     *
     * @var ItemIdType
     */
    public $ReferenceItemId;

    /**
     * ObjectName property
     *
     * @var string
     */
    public $ObjectName;
}
