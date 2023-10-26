<?php

namespace Chungachanga\AbstractMigration\Migration;

use Chungachanga\AbstractMigration\Collection\EntityCollectionInterface;

interface TransferStrategyInterface
{
    /**
     * Unsafe operation (write to destination repository)
     * @param EntityCollectionInterface $entities
     * @return void
     */
    public function transfer(EntityCollectionInterface $entities);
}