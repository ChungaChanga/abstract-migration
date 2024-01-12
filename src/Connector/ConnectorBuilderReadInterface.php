<?php

namespace Chungachanga\AbstractMigration\Connector;

interface ConnectorBuilderReadInterface
{
    public function reset(): void;
    public function getConnector(): ConnectorReadInterface;
}