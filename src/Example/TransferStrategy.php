<?php

namespace Chungachanga\AbstractMigration\Example;

use Chungachanga\AbstractMigration\Collection\EntityCollectionInterface;
use Chungachanga\AbstractMigration\Connector\ConnectorWriterInterface;
use Chungachanga\AbstractMigration\Migration\TransferStrategyInterface;

class TransferStrategy implements TransferStrategyInterface
{
    public function __construct(
        private ConnectorWriterInterface $destinationConnector,
    )
    {
    }

    /**
     * Unsafe operation (write to destination repository)
     * @param EntityCollectionInterface $entities
     * @return void
     */
    public function transfer(EntityCollectionInterface $entities)
    {
        $destinationEntitiesState = [];
        foreach ($entities as $entity) {
            $destinationEntitiesState[] = $this->destinationConnector->getMapper()->getState($entity);
        }
        $this->destinationConnector->getRepository()->create($destinationEntitiesState);
    }
}