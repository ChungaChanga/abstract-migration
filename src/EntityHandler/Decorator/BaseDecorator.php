<?php

namespace Chungachanga\AbstractMigration\EntityHandler\Decorator;

use Chungachanga\AbstractMigration\EntityHandler\HandlerInterface;
use SplObjectStorage;

class BaseDecorator implements HandlerInterface
{
    protected HandlerInterface $handler;
    public function __constructor(HandlerInterface $handler)
    {
        $this->handler = $handler;
    }
    public function handle(SplObjectStorage $entities)
    {
        $this->handler->handle($entities);
    }
}