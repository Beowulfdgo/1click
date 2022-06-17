<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SupplierstableTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SupplierstableTable Test Case
 */
class SupplierstableTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SupplierstableTable
     */
    protected $Supplierstable;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Supplierstable',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Supplierstable') ? [] : ['className' => SupplierstableTable::class];
        $this->Supplierstable = $this->getTableLocator()->get('Supplierstable', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Supplierstable);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\SupplierstableTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
