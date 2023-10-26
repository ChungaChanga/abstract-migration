<?php

namespace Chungachanga\AbstractMigration\Test\Unit;

use Chungachanga\AbstractMigration\Example\Connector\Memory\Connector\CustomerConnector;
use Chungachanga\AbstractMigration\Example\TransferStrategy;
use Chungachanga\AbstractMigration\Test\UnitBase;

class TransferStrategyTest extends UnitBase
{
    public function testTransferEntitiesCount()
    {
        $entities = self::createCustomerEntitiesCollection(self::CUSTOMER_REPOSITORY_NINE_ENTITIES_STATES);
        $destConnector = new CustomerConnector();
        $transferStrategy = new TransferStrategy($destConnector);

        set_time_limit(1);
        $transferStrategy->transfer($entities);

        $this->assertEquals(
            9,
            count($destConnector->getRepository()->fetch(0, 100))
        );

    }

    public function testTransferEntitiesValues()
    {
        $entities = self::createCustomerEntitiesCollection(self::CUSTOMER_REPOSITORY_NINE_ENTITIES_STATES);
        $destConnector = new CustomerConnector();
        $transferStrategy = new TransferStrategy($destConnector);

        set_time_limit(1);
        $transferStrategy->transfer($entities);

        $this->assertEquals(1, $destConnector->getRepository()->fetch(0, 1)[0]['id']);
        $this->assertEquals(4, $destConnector->getRepository()->fetch(3, 4)[0]['id']);
    }

}