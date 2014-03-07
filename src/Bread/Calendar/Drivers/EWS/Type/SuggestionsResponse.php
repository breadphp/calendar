<?php
namespace Bread\Calendar\Drivers\EWS\Type;

use Bread\Calendar\Drivers\EWS\Type;

/**
 * Definition of the SuggestionsResponseType type
 */

/**
 * Definition of the SuggestionsResponseType type
 */
class SuggestionsResponse  extends Type
{

    /**
     * ResponseMessage property
     *
     * @var ResponseMessageType
     */
    public $ResponseMessage;

    /**
     * SuggestionDayResultArray property
     *
     * @var ArrayOfSuggestionDayResult
     */
    public $SuggestionDayResultArray;
}
