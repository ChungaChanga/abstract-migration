<?php

namespace Chungachanga\AbstractMigration\Example\Connector\Memory\Mapper;

use Chungachanga\AbstractMigration\Entity\EntityInterface;
use Chungachanga\AbstractMigration\Example\Entity\Customer;
use Chungachanga\AbstractMigration\Mapper\MapperFullInterface;

class CustomerMapper implements MapperFullInterface
{
    public function fromState(array $state): Customer
    {
        $customer = new Customer();

        $customer->setId($state['id']);

        return $customer;
    }

    public function getState(EntityInterface $entity): array
    {
        /**@var Customer $entity */
        return [
            'id' => $entity->getId()
        ];
    }

}