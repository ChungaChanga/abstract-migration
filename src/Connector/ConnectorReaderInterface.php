<?php

namespace Chungachanga\AbstractMigration\Connector;


use Chungachanga\AbstractMigration\Mapper\MapperReadInterface;
use Chungachanga\AbstractMigration\Repository\RepositoryReadInterface;

interface ConnectorReaderInterface extends ConnectorInterface
{
    public function getRepository(): RepositoryReadInterface;
    public function getMapper(): MapperReadInterface;
}