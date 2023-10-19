<?php

namespace Chungachanga\AbstractMigration\Connector;


use Chungachanga\AbstractMigration\Mapper\MapperFullInterface;
use Chungachanga\AbstractMigration\Repository\RepositoryFullInterface;

interface ConnectorInterface
{
    public function getType(): string;
}