<?php

namespace Chungachanga\AbstractMigration\Connector;

use Chungachanga\AbstractMigration\Mapper\MapperReadInterface;
use Chungachanga\AbstractMigration\Repository\RepositoryReadInterface;

interface ConnectorFactoryReadInterface
{
    public function createRepository(): RepositoryReadInterface;
    public function createMapper(): MapperReadInterface;
}