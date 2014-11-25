<?php
namespace Bread\Calendar\Drivers\EWS\Type;

use Bread\Calendar\Drivers\EWS\Type;

/**
 * Definition of the FreeBusyViewOptionsType type
 */

/**
 * Definition of the FreeBusyViewOptionsType type
 */
class FreeBusyViewOptions  extends Type
{

    /**
     * TimeWindow property
     *
     * @var Duration
     */
    public $TimeWindow;

    /**
     * MergedFreeBusyIntervalInMinutes property
     *
     * @var integer
     */
    public $MergedFreeBusyIntervalInMinutes;

    /**
     * RequestedView property
     *
     * @var FreeBusyViewType
     */
    public $RequestedView;
}
