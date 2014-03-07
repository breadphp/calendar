<?php
namespace Bread\Calendar;

use Bread\Calendar\Driver;
use Bread\Configuration\Manager as Configuration;
use Bread\REST;

class Model extends REST\Model
{

    const SEVERITY_LOW = 0;

    const SEVERITY_MEDIUM = 1;

    const SEVERITY_HIGH = 2;

    protected $id;

    protected $changeKey;

    protected $author;

    protected $attendees;

    protected $start;

    protected $end;

    protected $location;

    protected $subject;

    protected $description;

    protected $severity = self::SEVERITY_LOW;

    protected $attachment;

    public function send()
    {
        return Driver::driver(__CLASS__)->send($this);
    }
}

Configuration::defaults('Bread\Calendar\Model', array(
    'properties' => array(
        'id' => array(
            'type' => 'string'
        ),
        'changeKey' => array(
            'type' => 'string'
        ),
        'author' => array(
            'type' => 'Bread\REST\Behaviors\ARO'
        ),
        'attendees' => array(
            'type' => 'Bread\REST\Behaviors\ARO',
            'multiple' => true
        ),
        'start' => array(
            'type' => 'Bread\Types\DateTime'
        ),
        'end' => array(
            'type' => 'Bread\Types\DateTime'
        ),
        'location' => array(
            // TODO 'type'=>'Bread\Location\Model'
            'type' => 'string'
        ),
        'subject' => array(
            'type' => 'string'
        ),
        'description' => array(
            'type' => 'string'
        ),
        'isAllDayEvent' => array(
            'type' => 'bollean'
        ),
        'type' => array(
            'type' => 'integer'
        ),
        'severity' => array(
            'type' => 'integer'
        ),
        'attachments' => array(
            'type' => 'Bread\Media\File\Model',
            'multiple' => true
        )
    )
));