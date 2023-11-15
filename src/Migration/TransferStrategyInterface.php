<?php

namespace Chungachanga\AbstractMigration\Migration;

interface TransferStrategyInterface
{
    /**
     * Unsafe operation (write to destination repository)
     * @param $entities
     * @return void
     */
    public function transfer($entities);
}