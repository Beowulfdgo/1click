<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ZonestableLogisticstableTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ZonestableLogisticstableTable Test Case
 */
class ZonestableLogisticstableTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ZonestableLogisticstableTable
     */
    protected $ZonestableLogisticstable;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.ZonestableLogisticstable',
        'app.Zonestable',
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
        $config = $this->getTableLocator()->exists('ZonestableLogisticstable') ? [] : ['className' => ZonestableLogisticstableTable::class];
        $this->ZonestableLogisticstable = $this->getTableLocator()->get('ZonestableLogisticstable', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->ZonestableLogisticstable);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ZonestableLogisticstableTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ZonestableLogisticstableTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
