<?php

namespace Chungachanga\AbstractMigration\Mapper;


interface MapperReadInterface
{
    public function fromState(array $state);
    public function validateState(array $state);
}