<?php

namespace Chungachanga\AbstractMigration\Connector;

use Chungachanga\AbstractMigration\Mapper\MapperWriteInterface;
use Chungachanga\AbstractMigration\Repository\RepositoryWriteInterface;

interface ConnectorFactoryWriteInterface
{
    public function createRepository(): RepositoryWriteInterface;
    public function createMapper(): MapperWriteInterface;
}