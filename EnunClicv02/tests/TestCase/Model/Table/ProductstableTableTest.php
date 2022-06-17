<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProductstableTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProductstableTable Test Case
 */
class ProductstableTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProductstableTable
     */
    protected $Productstable;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Productstable',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Productstable') ? [] : ['className' => ProductstableTable::class];
        $this->Productstable = $this->getTableLocator()->get('Productstable', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Productstable);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ProductstableTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
