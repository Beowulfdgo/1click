<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CostumerstableTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CostumerstableTable Test Case
 */
class CostumerstableTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CostumerstableTable
     */
    protected $Costumerstable;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Costumerstable',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Costumerstable') ? [] : ['className' => CostumerstableTable::class];
        $this->Costumerstable = $this->getTableLocator()->get('Costumerstable', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Costumerstable);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CostumerstableTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
