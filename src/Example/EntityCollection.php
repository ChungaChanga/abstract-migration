<?php

namespace Chungachanga\AbstractMigration\Example;

use SplObjectStorage;

class EntityCollection extends SplObjectStorage
{
    public function add($entity)
    {
        $this->attach($entity);
    }

    public function clear()
    {
        $this->removeAll($this);
    }
}