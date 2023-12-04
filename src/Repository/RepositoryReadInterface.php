<?php

namespace Chungachanga\AbstractMigration\Repository;

use Chungachanga\AbstractMigration\Iterator\AwaitingPageIterator;

interface RepositoryReadInterface
{
    public function fetchPage(int $page, int $pageSize): array;
    public function createAwaitingPageIterator(
        int $page,
        int $pageSize,
        int $jumpSize,
    ): AwaitingPageIterator;
}