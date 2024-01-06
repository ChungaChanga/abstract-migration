<?php

namespace Chungachanga\AbstractMigration\Connection;

use Chungachanga\AbstractMigration\Connector\ConnectorInterface;
use Chungachanga\AbstractMigration\Connector\ConnectorReadInterface;
use Chungachanga\AbstractMigration\Connector\ConnectorWriteInterface;
use Chungachanga\AbstractMigration\Entity\EntityTypeInterface;

interface ConnectionInterface
{
    public function transfer();
}