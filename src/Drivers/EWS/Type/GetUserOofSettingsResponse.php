<?php
namespace Bread\Calendar\Drivers\EWS\Type;

use Bread\Calendar\Drivers\EWS\Type;

/**
 * Definition of the GetUserOofSettingsResponse type
 */

/**
 * Definition of the GetUserOofSettingsResponse type
 */
class GetUserOofSettingsResponse extends Type
{

    /**
     * ResponseMessage property
     *
     * @var ResponseMessageType
     */
    public $ResponseMessage;

    /**
     * OofSettings property
     *
     * @var UserOofSettings
     */
    public $OofSettings;

    /**
     * AllowExternalOof property
     *
     * @var ExternalAudience
     */
    public $AllowExternalOof;
}
