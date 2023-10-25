<?php

namespace Chungachanga\AbstractMigration\EntityHandler\Decorator;

use Chungachanga\AbstractMigration\Collection\EntityCollectionInterface;
use Chungachanga\AbstractMigration\EntityHandler\HandlerInterface;

class BaseDecorator implements HandlerInterface
{
    protected HandlerInterface $handler;
    public function __constructor(HandlerInterface $handler)
    {
        $this->handler = $handler;
    }
    public function handle(EntityCollectionInterface $entities)
    {
        $this->handler->handle($entities);
    }
}