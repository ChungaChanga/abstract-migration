<?php

namespace Chungachanga\AbstractMigration\Test;

use Chungachanga\AbstractMigration\Collection\EntityCollectionInterface;
use Chungachanga\AbstractMigration\Example\Entity\Customer;
use Chungachanga\AbstractMigration\Example\EntityCollection;
use PHPUnit\Framework\TestCase;
use SplObjectStorage;
abstract class UnitBase extends TestCase
{
    const REPOSITORY_SEVEN_VALUES = [
        'value1',
        'value2',
        'value3',
        'value4',
        'value5',
        'value6',
        'value7',
    ];

    const CUSTOMER_REPOSITORY_NINE_ENTITIES_STATES = [
        ['id' => 1],
        ['id' => 2],
        ['id' => 3],
        ['id' => 4],
        ['id' => 5],
        ['id' => 6],
        ['id' => 7],
        ['id' => 8],
        ['id' => 9],
    ];

    protected static function createCustomerEntitiesCollection(array $states): EntityCollectionInterface
    {
        $entities = new EntityCollection();
        foreach ($states as $v) {
            $customer = new Customer();
            $customer->setId($v['id']);
            $entities->add($customer);
        }
        return $entities;
    }

    protected static function createSelfExpandingRepository()
    {

    }
}