<?php
namespace Bread\Calendar\Drivers\EWS\Type;

use Bread\Calendar\Drivers\EWS\Type;

/**
 * Definition of the DefaultShapeNamesType type
 */

/**
 * Default shape names for response shapes
 */
class DefaultShapeNames  extends Type
{

    /**
     * All properties are retured in the response
     *
     * @var string
     */
    const ALL_PROPERTIES = 'AllProperties';

    /**
     * Default properties are returned in the respoonse
     *
     * @var string
     */
    const DEFAULT_PROPERTIES = 'Default';

    /**
     * Only folder ids are returned in the response
     *
     * @var string
     */
    const ID_ONLY = 'IdOnly';
}
