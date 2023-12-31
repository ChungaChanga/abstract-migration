<?php

namespace Chungachanga\AbstractMigration\Example\Connector\Memory\Repository;

use Chungachanga\AbstractMigration\Repository\RepositoryFullInterface;
use Chungachanga\AbstractMigration\Repository\RepositoryReadAbstract;

class CustomerRepository extends RepositoryReadAbstract implements RepositoryFullInterface
{
    private array $entities = [];

    public function create(array $entities)
    {
        $this->entities = array_merge($this->entities, $entities);
    }

    public function fetch(int $start, int $end): array
    {
        return array_slice($this->entities, $start, $end - $start);
    }

    public function fetchPage(int $page, int $pageSize): array
    {
        return array_slice($this->entities, ($page - 1) * $pageSize, $pageSize);
    }
}