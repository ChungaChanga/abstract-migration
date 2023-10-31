<?php

namespace Chungachanga\AbstractMigration\Repository;

use Symfony\Contracts\HttpClient\ResponseInterface;

interface RepositoryWriteInterface
{
    public function create(array $entities): ResponseInterface;
}