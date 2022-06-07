<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RolestableTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RolestableTable Test Case
 */
class RolestableTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\RolestableTable
     */
    protected $Rolestable;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Rolestable',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Rolestable') ? [] : ['className' => RolestableTable::class];
        $this->Rolestable = $this->getTableLocator()->get('Rolestable', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Rolestable);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\RolestableTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
