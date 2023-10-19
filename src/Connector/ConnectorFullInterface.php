<?php

namespace Chungachanga\AbstractMigration\Connector;


use Chungachanga\AbstractMigration\Mapper\MapperFullInterface;
use Chungachanga\AbstractMigration\Repository\RepositoryFullInterface;

interface ConnectorFullInterface extends ConnectorReaderInterface, ConnectorWriterInterface
{
    public function getRepository(): RepositoryFullInterface;
    public function getMapper(): MapperFullInterface;
}