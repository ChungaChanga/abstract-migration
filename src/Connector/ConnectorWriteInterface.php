<?php declare(strict_types=1);

namespace Chungachanga\AbstractMigration\Connector;

interface ConnectorWriteInterface extends ConnectorInterface
{
    public function create($entity);
}