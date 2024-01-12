<?php

namespace Chungachanga\AbstractMigration\Connector;

use Chungachanga\AbstractMigration\Mapper\MapperReadInterface;
use Chungachanga\AbstractMigration\Repository\RepositoryReadInterface;

interface ConnectorReadInterface
{
    public function getRepository(): RepositoryReadInterface;
    public function setRepository(RepositoryReadInterface $repository): void;
    public function getMapper(): MapperReadInterface;
    public function setMapper(MapperReadInterface $mapper): void;
    public function getIterator(): \Iterator;
    public function setIterator(\Iterator $iterator): void;
}