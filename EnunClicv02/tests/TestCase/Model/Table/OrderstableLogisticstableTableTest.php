<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OrderstableLogisticstableTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OrderstableLogisticstableTable Test Case
 */
class OrderstableLogisticstableTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\OrderstableLogisticstableTable
     */
    protected $OrderstableLogisticstable;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.OrderstableLogisticstable',
        'app.Orderstable',
        'app.Logisticstable',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('OrderstableLogisticstable') ? [] : ['className' => OrderstableLogisticstableTable::class];
        $this->OrderstableLogisticstable = $this->getTableLocator()->get('OrderstableLogisticstable', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->OrderstableLogisticstable);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\OrderstableLogisticstableTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\OrderstableLogisticstableTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
