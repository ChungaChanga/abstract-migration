<?php

namespace Chungachanga\AbstractMigration\Example;

use Chungachanga\AbstractMigration\Collection\EntityCollectionInterface;
use SplObjectStorage;
class EntityCollection extends SplObjectStorage implements EntityCollectionInterface
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