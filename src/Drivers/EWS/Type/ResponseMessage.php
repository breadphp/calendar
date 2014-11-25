<?php
namespace Bread\Calendar\Drivers\EWS\Type;

use Bread\Calendar\Drivers\EWS\Type;

/**
 * Definition of the ResponseMessageType type
 */

/**
 * Definition of the ResponseMessageType type
 */
class ResponseMessage  extends Type
{

    /**
     * MessageText property
     *
     * @var string
     */
    public $MessageText;

    /**
     * ResponseCode property
     *
     * @var ResponseCodeType
     */
    public $ResponseCode;

    /**
     * DescriptiveLinkKey property
     *
     * @var integer
     */
    public $DescriptiveLinkKey;

    /**
     * MessageXml property
     *
     * @var MessageXml
     */
    public $MessageXml;

    /**
     * ResponseClass property
     *
     * @var ResponseClassType
     */
    public $ResponseClass;
}
