<?php

namespace Chungachanga\AbstractMigration\Repository;

interface RepositoryReadInterface
{
    public function fetchPage(int $page, int $pageSize): array;
    public function createAwaitingPageIterator(
        int $page,
        int $pageSize,
        int $jumpSize,
    ): \Iterator;
}