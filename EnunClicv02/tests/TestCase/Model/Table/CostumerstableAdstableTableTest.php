<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CostumerstableAdstableTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CostumerstableAdstableTable Test Case
 */
class CostumerstableAdstableTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CostumerstableAdstableTable
     */
    protected $CostumerstableAdstable;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.CostumerstableAdstable',
        'app.Costumerstable',
        'app.Adstable',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('CostumerstableAdstable') ? [] : ['className' => CostumerstableAdstableTable::class];
        $this->CostumerstableAdstable = $this->getTableLocator()->get('CostumerstableAdstable', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->CostumerstableAdstable);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CostumerstableAdstableTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\CostumerstableAdstableTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
