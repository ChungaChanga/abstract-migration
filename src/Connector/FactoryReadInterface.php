<?php

namespace Chungachanga\AbstractMigration\Connector;

use Chungachanga\AbstractMigration\Mapper\MapperReadInterface;
use Chungachanga\AbstractMigration\Repository\RepositoryReadInterface;

interface FactoryReadInterface extends FactoryInterface
{
    public function createRepository(): RepositoryReadInterface;
    public function createMapper(): MapperReadInterface;
    public function createReadingIterator(): \Iterator;
}