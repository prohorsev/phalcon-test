<?php

use Phalcon\Incubator\MongoDB\Mvc\Collection;

class EnterCollection extends Collection
{
    public $date;

    public function onConstruct(): void
    {
        $this->setSource('EnterCollection');
        $this->useImplicitObjectIds(false);
    }
}
