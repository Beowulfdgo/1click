<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ZonesDeliveriesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ZonesDeliveriesTable Test Case
 */
class ZonesDeliveriesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ZonesDeliveriesTable
     */
    protected $ZonesDeliveries;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.ZonesDeliveries',
        'app.Zones',
        'app.Deliveries',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ZonesDeliveries') ? [] : ['className' => ZonesDeliveriesTable::class];
        $this->ZonesDeliveries = $this->getTableLocator()->get('ZonesDeliveries', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->ZonesDeliveries);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ZonesDeliveriesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ZonesDeliveriesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
