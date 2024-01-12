<?php

namespace Chungachanga\AbstractMigration\Connector;

interface ConnectorBuilderWriteInterface
{
    public function reset(): void;
    public function getConnector(): ConnectorWriteInterface;
}