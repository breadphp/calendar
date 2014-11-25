<?php
namespace Bread\Calendar;

use Bread\Calendar\Driver;
use Bread\Configuration\Manager as Configuration;
use Bread\Promises\When;
use Bread\REST;
use Bread\Types\DateTime;

class Controller extends REST\Controller
{
    public function controlledResource(array $parameters = array())
    {
        if ($this->request->method === 'POST' || $this->request->method === 'OPTIONS') {
            return When::resolve(array());
        }
        $search = (array) $this->request->query['search'];
        $options = (array) $this->request->query['options'];
        $start = new DateTime($search['start']);
        $end = new DateTime($search['end']);
        $search = array(
            '$and' => array(
                array(
                    'start' => array(
                        '$lte' => $end
                    )
                ),
                array(
                    'end' => array(
                        '$gte' => $start
                    )
                )
            )
        );
        return Model::fetch($search, $options, $this->domain);
    }

}

