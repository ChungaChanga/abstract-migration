<?php

namespace Chungachanga\AbstractMigration\Migration;

use Chungachanga\AbstractMigration\Collection\EntityCollectionInterface;
use Chungachanga\AbstractMigration\Connector\ConnectorWriterInterface;

class TransferStrategy
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