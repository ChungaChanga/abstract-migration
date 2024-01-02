<?php

namespace Chungachanga\AbstractMigration\Repository;

interface RepositoryWriteInterface
{
    public function create(array $entities);
    public function createOne(array $entity);
}