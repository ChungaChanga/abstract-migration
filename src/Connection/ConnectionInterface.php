<?php

namespace Chungachanga\AbstractMigration\Connection;

use Chungachanga\AbstractMigration\Connector\ConnectorInterface;
use Chungachanga\AbstractMigration\Connector\ConnectorReaderInterface;
use Chungachanga\AbstractMigration\Connector\ConnectorWriterInterface;
use Chungachanga\AbstractMigration\Entity\EntityTypeInterface;

interface ConnectionInterface
{
    public function getSourceConnector(): ConnectorReaderInterface;
    public function getDestinationConnector(): ConnectorWriterInterface;
    public function validateType(
        ConnectorInterface $connector,
        ConnectorInterface $connector1,
    );
}