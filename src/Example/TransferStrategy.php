<?php

namespace Chungachanga\AbstractMigration\Example;

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
     * @param $entities
     * @return void
     */
    public function transfer($entities)
    {
        $destinationEntitiesState = [];
        foreach ($entities as $entity) {
            $destinationEntitiesState[] = $this->destinationConnector->getMapper()->getState($entity);
        }
        $this->destinationConnector->getRepository()->create($destinationEntitiesState);
    }
}