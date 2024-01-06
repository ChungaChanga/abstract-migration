<?php

namespace Chungachanga\AbstractMigration\Connector;

use Chungachanga\AbstractMigration\Mapper\MapperFullInterface;
use Chungachanga\AbstractMigration\Repository\RepositoryFullInterface;

interface FactoryFullInterface extends FactoryReadInterface, FactoryWriteInterface
{
    public function createRepository(): RepositoryFullInterface;
    public function createMapper(): MapperFullInterface;
}