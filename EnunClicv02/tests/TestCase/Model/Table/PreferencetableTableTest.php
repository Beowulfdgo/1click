<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PreferencetableTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PreferencetableTable Test Case
 */
class PreferencetableTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PreferencetableTable
     */
    protected $Preferencetable;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Preferencetable',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Preferencetable') ? [] : ['className' => PreferencetableTable::class];
        $this->Preferencetable = $this->getTableLocator()->get('Preferencetable', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Preferencetable);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\PreferencetableTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
