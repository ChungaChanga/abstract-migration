<?php

namespace Chungachanga\AbstractMigration\Connector;

use Chungachanga\AbstractMigration\Mapper\MapperWriteInterface;
use Chungachanga\AbstractMigration\Repository\RepositoryWriteInterface;

interface FactoryWriteInterface extends FactoryInterface
{
    public function createRepository(): RepositoryWriteInterface;
    public function createMapper(): MapperWriteInterface;
    public function createWritingIterator(): \Iterator;
}