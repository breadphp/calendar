<?php
namespace Bread\Calendar\Drivers\EWS\Type;

use Bread\Calendar\Drivers\EWS\Type;

/**
 * Definition of the BodyTypeResponseType type
 */

/**
 * Default shape names for response shapes
 */
class BodyTypeResponse  extends Type
{

    /**
     * All properties are retured in the response
     *
     * @var string
     */
    const BEST = 'Best';

    /**
     * Default properties are returned in the respoonse
     *
     * @var string
     */
    const HTML = 'HTML';

    /**
     * Plain text body
     *
     * @var string
     */
    const TEXT = 'Text';
}
