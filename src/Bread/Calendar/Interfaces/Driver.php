<?php
namespace Bread\Calendar\Interfaces;

use Bread\Calendar\Model;

interface Driver
{

    public function send(Model $model);
}