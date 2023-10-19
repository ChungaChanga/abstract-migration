<?php

namespace Chungachanga\AbstractMigration\Connection;

use Chungachanga\AbstractMigration\Connector\ConnectorReaderInterface;
use Chungachanga\AbstractMigration\Connector\ConnectorWriterInterface;
use Exception;

class Connection implements ConnectionInterface
{
    public function __construct(
        private ConnectorReaderInterface $sourceConnector,
        private ConnectorWriterInterface $destinationConnector,
    )
    {
        $this->validateType($this->sourceConnector, $this->destinationConnector);
    }

    public function getSourceConnector(): ConnectorReaderInterface
    {
        return $this->sourceConnector;
    }

    public function getDestinationConnector(): ConnectorWriterInterface
    {
        return $this->destinationConnector;
    }

    private function validateType(
        ConnectorReaderInterface $sourceConnector,
        ConnectorWriterInterface $destinationConnector
    )
    {
        if ($sourceConnector->getType() !== $destinationConnector->getType()) {
            throw new Exception('Connections types must be equal');//todo refactoring
        }
    }
}