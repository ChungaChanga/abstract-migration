<?php

namespace Chungachanga\AbstractMigration\Connector;

use Chungachanga\AbstractMigration\Mapper\MapperFullInterface;
use Chungachanga\AbstractMigration\Repository\RepositoryFullInterface;

interface ConnectorFactoryFullInterface extends ConnectorFactoryReadInterface, ConnectorFactoryWriteInterface
{
    public function createRepository(): RepositoryFullInterface;
    public function createMapper(): MapperFullInterface;
}