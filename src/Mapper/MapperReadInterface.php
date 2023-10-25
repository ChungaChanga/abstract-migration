<?php

namespace Chungachanga\AbstractMigration\Mapper;


interface MapperReadInterface
{
    public function fromState(array $state);
}