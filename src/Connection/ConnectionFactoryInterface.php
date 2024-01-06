<?php

namespace Chungachanga\AbstractMigration\Connection;

use Chungachanga\AbstractMigration\Connector\FactoryReadInterface;
use Chungachanga\AbstractMigration\Connector\FactoryWriteInterface;

interface ConnectionFactoryInterface
{
    public function createSourceConnectorFactory(): FactoryReadInterface;
    public function createDestinationConnectorFactory(): FactoryWriteInterface;
}