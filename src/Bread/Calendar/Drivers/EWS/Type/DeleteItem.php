<?php
namespace Bread\Calendar\Drivers\EWS\Type;

use Bread\Calendar\Drivers\EWS\Type;

/**
 * Definition of the DeleteItemType type
 */

/**
 * Definition of the DeleteItemType type
 */
class DeleteItem  extends Type
{

    /**
     * ItemIds property
     *
     * @var NonEmptyArrayOfBaseItemIdsType
     */
    public $ItemIds;

    /**
     * DeleteType property
     *
     * @var DisposalType
     */
    public $Delete;

    /**
     * SendMeetingCancellations property
     *
     * @var CalendarItemCreateOrDeleteOperationType
     */
    public $SendMeetingCancellations;

    /**
     * AffectedTaskOccurrences property
     *
     * @var AffectedTaskOccurrencesType
     */
    public $AffectedTaskOccurrences;
}
