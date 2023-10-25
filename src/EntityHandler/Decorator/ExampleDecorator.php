<?php

namespace Chungachanga\AbstractMigration\EntityHandler\Decorator;

use Chungachanga\AbstractMigration\Collection\EntityCollectionInterface;

class ExampleDecorator extends BaseDecorator
{
    public function handle(EntityCollectionInterface $entities)
    {
        parent::handle($entities);
    }
}