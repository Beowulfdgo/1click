<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OrderstableTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OrderstableTable Test Case
 */
class OrderstableTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\OrderstableTable
     */
    protected $Orderstable;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Orderstable',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Orderstable') ? [] : ['className' => OrderstableTable::class];
        $this->Orderstable = $this->getTableLocator()->get('Orderstable', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Orderstable);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\OrderstableTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
