<?php

namespace Chungachanga\AbstractMigration\Collection;

interface EntityCollectionInterface
{
    public function add($entity);
    public function clear();
}