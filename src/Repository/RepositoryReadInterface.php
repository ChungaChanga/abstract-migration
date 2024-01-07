<?php

namespace Chungachanga\AbstractMigration\Repository;

interface RepositoryReadInterface
{
    public function fetchPage(int $page, int $pageSize): array;
}