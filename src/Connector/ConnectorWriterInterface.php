<?php

namespace Chungachanga\AbstractMigration\Connector;


use Chungachanga\AbstractMigration\Mapper\MapperWriteInterface;
use Chungachanga\AbstractMigration\Repository\RepositoryWriteInterface;

interface ConnectorWriterInterface extends ConnectorInterface
{
    public function getRepository(): RepositoryWriteInterface;
    public function getMapper(): MapperWriteInterface;
}