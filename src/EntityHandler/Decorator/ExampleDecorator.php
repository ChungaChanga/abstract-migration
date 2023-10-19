<?php

namespace Chungachanga\AbstractMigration\EntityHandler\Decorator;

use SplObjectStorage;

class ExampleDecorator extends BaseDecorator
{
    public function handle(SplObjectStorage $entities)
    {
        parent::handle($entities);
    }
}