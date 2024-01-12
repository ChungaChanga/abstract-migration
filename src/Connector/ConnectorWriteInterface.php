<?php declare(strict_types=1);

namespace Chungachanga\AbstractMigration\Connector;

use Chungachanga\AbstractMigration\Mapper\MapperWriteInterface;
use Chungachanga\AbstractMigration\Repository\RepositoryWriteInterface;
use Symfony\Contracts\EventDispatcher\EventDispatcherInterface;

interface ConnectorWriteInterface
{
    public function create(\Traversable $entities): void;
    public function getRepository(): RepositoryWriteInterface;
    public function setRepository(RepositoryWriteInterface $repository): void;
    public function getMapper(): MapperWriteInterface;
    public function setMapper(MapperWriteInterface $mapper): void;
    public function getEventDispatcher(): EventDispatcherInterface;
    public function setEventDispatcher(EventDispatcherInterface $eventDispatcher): void;

}