<?php

namespace Chungachanga\AbstractMigration\Repository;

use _PHPStan_d5c599c96\Nette\Neon\Exception;
use Chungachanga\AbstractMigration\Iterator\AwaitingPageIterator;

abstract class RepositoryReadAbstract implements RepositoryReadInterface
{
    public function createAwaitingPageIterator(
        int $startPage,
        int $pageSize = 10,
        int $jumpSize = 0,
    ): AwaitingPageIterator
    {
        return new AwaitingPageIterator($this, $startPage, $pageSize, $jumpSize);
    }

    public function fetchPage(int $page, int $pageSize): array
    {
        if ($page < 1) {
            throw new \InvalidArgumentException('Page must be more than 1');
        }
    }
}