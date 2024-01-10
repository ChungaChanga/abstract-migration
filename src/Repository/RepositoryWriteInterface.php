<?php

namespace Chungachanga\AbstractMigration\Repository;

interface RepositoryWriteInterface
{
    public function create(array $entitiesState): array;
    public function createOne(array $entityState): array;
}