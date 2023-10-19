<?php

namespace Chungachanga\AbstractMigration\Migration;

use Chungachanga\AbstractMigration\Collection\EntityCollectionInterface;
use Chungachanga\AbstractMigration\Connection\ConnectionInterface;
use Chungachanga\AbstractMigration\Repository\RepositoryReadInterface;
use Chungachanga\AbstractMigration\EntityHandler\HandlerInterface;
use InvalidArgumentException;
use Iterator;

class Migration
{
    public function __construct(
        private ConnectionInterface $connection,
        private HandlerInterface $entityHandler,
        private TransferStrategy $strategy,
        private EntityCollectionInterface $entityCollection,
        private MigrationState $state
    )
    {

    }
    public function start()
    {
        $sourceRepository = $this->connection->getSourceConnector()->getRepository();
        $sourceMapper = $this->connection->getSourceConnector()->getMapper();
        $iterator = $this->createIterator($sourceRepository);

        foreach ($iterator as $currentBatchNumber => $sourceEntitiesState) {
            $this->entityCollection->clear();
            if ($currentBatchNumber > $this->state->getEndBatchNumber()) {
                break;
            }
            if ($this->state->getDelaySeconds() > 0) {
                sleep($this->state->getDelaySeconds());
            }

            foreach ($sourceEntitiesState as $state) {
                $this->entityCollection->add($sourceMapper->fromState($state));
            }

            $this->entityHandler->handle($this->entityCollection);

            $this->strategy->transfer($this->entityCollection);
        }
    }

    protected function createIterator(RepositoryReadInterface $repository): Iterator
    {
        return $repository->createAwaitingPageIterator(
            $this->state->getStartBatchNumber(),
            $this->state->getBatchSize(),
            $this->state->getJumpSize()
        );
    }
}