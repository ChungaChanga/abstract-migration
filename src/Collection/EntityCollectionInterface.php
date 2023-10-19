<?php

namespace Chungachanga\AbstractMigration\Collection;

use Iterator;

interface EntityCollectionInterface extends Iterator
{
    public function add($entity);
    public function clear();
}