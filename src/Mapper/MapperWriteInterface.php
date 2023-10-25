<?php

namespace Chungachanga\AbstractMigration\Mapper;


interface MapperWriteInterface
{
    public function getState($entity): array;
}