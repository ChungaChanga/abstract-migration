<?php

namespace Chungachanga\AbstractMigration\Repository;

interface RepositoryWriteInterface
{
    public function createOne(array $entityState): array;
}