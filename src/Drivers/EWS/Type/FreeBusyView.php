<?php
namespace Bread\Calendar\Drivers\EWS\Type;

use Bread\Calendar\Drivers\EWS\Type;

/**
 * Definition of the FreeBusyView type
 */

/**
 * Definition of the FreeBusyView type
 */
class FreeBusyView extends Type
{

    /**
     * FreeBusyViewType property
     *
     * @var FreeBusyViewType
     */
    public $FreeBusyView;

    /**
     * MergedFreeBusy property
     *
     * @var string
     */
    public $MergedFreeBusy;

    /**
     * CalendarEventArray property
     *
     * @var ArrayOfCalendarEvent
     */
    public $CalendarEventArray;

    /**
     * WorkingHours property
     *
     * @var WorkingHours
     */
    public $WorkingHours;
}
