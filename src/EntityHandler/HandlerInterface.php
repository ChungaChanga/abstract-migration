<?php

namespace Chungachanga\AbstractMigration\EntityHandler;

use Chungachanga\AbstractMigration\Collection\EntityCollectionInterface;
interface HandlerInterface
{
    public function handle(EntityCollectionInterface $entities);
}