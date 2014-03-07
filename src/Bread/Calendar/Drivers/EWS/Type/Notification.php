<?php
namespace Bread\Calendar\Drivers\EWS\Type;

use Bread\Calendar\Drivers\EWS\Type;

/**
 * Definition of the NotificationType type
 */

/**
 * Definition of the NotificationType type
 */
class Notification  extends Type
{

    /**
     * SubscriptionId property
     *
     * @var SubscriptionIdType
     */
    public $SubscriptionId;

    /**
     * PreviousWatermark property
     *
     * @var WatermarkType
     */
    public $PreviousWatermark;

    /**
     * MoreEvents property
     *
     * @var boolean
     */
    public $MoreEvents;

    /**
     * CopiedEvent property
     *
     * @var MovedCopiedEventType
     */
    public $CopiedEvent;

    /**
     * CreatedEvent property
     *
     * @var BaseObjectChangedEventType
     */
    public $CreatedEvent;

    /**
     * DeletedEvent property
     *
     * @var BaseObjectChangedEventType
     */
    public $DeletedEvent;

    /**
     * ModifiedEvent property
     *
     * @var ModifiedEventType
     */
    public $ModifiedEvent;

    /**
     * MovedEvent property
     *
     * @var MovedCopiedEventType
     */
    public $MovedEvent;

    /**
     * NewMailEvent property
     *
     * @var BaseObjectChangedEventType
     */
    public $NewMailEvent;

    /**
     * StatusEvent property
     *
     * @var BaseNotificationEventType
     */
    public $StatusEvent;
}
