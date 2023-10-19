<?php

namespace Chungachanga\AbstractMigration\Example\Connector\Memory\Connector;

use Chungachanga\AbstractMigration\Connector\ConnectorFullInterface;
use Chungachanga\AbstractMigration\Example\Connector\Memory\Mapper\CustomerMapper;
use Chungachanga\AbstractMigration\Example\Connector\Memory\Repository\CustomerRepository;
use Chungachanga\AbstractMigration\Example\Entity\Customer;
use Chungachanga\AbstractMigration\Mapper\MapperFullInterface;
use Chungachanga\AbstractMigration\Repository\RepositoryFullInterface;

class CustomerConnector implements ConnectorFullInterface
{
    private ?RepositoryFullInterface $repository = null;
    private ?MapperFullInterface $mapper = null;
    public function getRepository(): RepositoryFullInterface
    {
        if (null === $this->repository) {
            $this->repository = new CustomerRepository();//todo
        }
        return $this->repository;
    }

    public function getMapper(): MapperFullInterface
    {
        if (null === $this->mapper) {
            $this->mapper = new CustomerMapper();//todo
        }
        return $this->mapper;
    }

    public function getType(): string
    {
        return Customer::TYPE;
    }
}