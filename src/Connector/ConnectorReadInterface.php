<?php declare(strict_types=1);

namespace Chungachanga\AbstractMigration\Connector;

interface ConnectorReadInterface extends ConnectorInterface
{
    public function getReadingIterator(): \Iterator;
}