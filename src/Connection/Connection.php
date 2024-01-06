<?php

namespace Chungachanga\AbstractMigration\Connection;

use Chungachanga\AbstractMigration\Connector\ConnectorInterface;
use Chungachanga\AbstractMigration\Connector\ConnectorReadInterface;
use Chungachanga\AbstractMigration\Connector\ConnectorWriteInterface;
use Exception;

class Connection implements ConnectionInterface
{
    public function __construct(
        private ConnectorReadInterface  $sourceConnector,
        private ConnectorWriteInterface $destinationConnector,
    )
    {
        $this->validateType($this->sourceConnector, $this->destinationConnector);
    }

    public function getSourceConnector(): ConnectorReadInterface
    {
        return $this->sourceConnector;
    }

    public function getDestinationConnector(): ConnectorWriteInterface
    {
        return $this->destinationConnector;
    }

    public function validateType(
        ConnectorInterface $sourceConnector,
        ConnectorInterface $destinationConnector
    )
    {
        if ($sourceConnector->getType() !== $destinationConnector->getType()) {
            throw new Exception('Connections types must be equal');//todo refactoring
        }
    }
}