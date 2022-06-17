<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PreferencetablesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PreferencetablesTable Test Case
 */
class PreferencetablesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PreferencetablesTable
     */
    protected $Preferencetables;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Preferencetables',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Preferencetables') ? [] : ['className' => PreferencetablesTable::class];
        $this->Preferencetables = $this->getTableLocator()->get('Preferencetables', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Preferencetables);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\PreferencetablesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
