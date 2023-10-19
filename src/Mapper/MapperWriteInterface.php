<?php

namespace Chungachanga\AbstractMigration\Mapper;

use Chungachanga\AbstractMigration\Entity\EntityInterface;

interface MapperWriteInterface
{
    public function getState(EntityInterface $entity): array;
}